<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckRuleResponseBody\checkRules;

use AlibabaCloud\Tea\Model;

class checkPolicies extends Model
{
    /**
     * @description Display name of the item\\"s chapter.
     *
     * @example Access Control
     *
     * @var string
     */
    public $sectionShowName;
    protected $_name = [
        'sectionShowName' => 'sectionShowName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->sectionShowName) {
            $res['sectionShowName'] = $this->sectionShowName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkPolicies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['sectionShowName'])) {
            $model->sectionShowName = $map['sectionShowName'];
        }

        return $model;
    }
}
