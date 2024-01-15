<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetHitResultResponseBody\data;

use AlibabaCloud\Tea\Model;

class resultInfo extends Model
{
    /**
     * @example 1343
     *
     * @var int
     */
    public $rid;

    /**
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'rid'      => 'Rid',
        'ruleName' => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
