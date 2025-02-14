<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckRuleResponseBody\checkRules;

use AlibabaCloud\Dara\Model;

class checkPolicies extends Model
{
    /**
     * @var string
     */
    public $sectionShowName;
    protected $_name = [
        'sectionShowName' => 'sectionShowName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sectionShowName) {
            $res['sectionShowName'] = $this->sectionShowName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['sectionShowName'])) {
            $model->sectionShowName = $map['sectionShowName'];
        }

        return $model;
    }
}
