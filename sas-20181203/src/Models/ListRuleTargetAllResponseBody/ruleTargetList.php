<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListRuleTargetAllResponseBody;

use AlibabaCloud\Tea\Model;

class ruleTargetList extends Model
{
    /**
     * @description The ID of the network object.
     *
     * @example 301944
     *
     * @var int
     */
    public $targetId;

    /**
     * @description The name of the network object.
     *
     * @example source-test-obj-xFKcx
     *
     * @var string
     */
    public $targetName;

    /**
     * @description The type of the object. Valid values:
     *
     *   IMAGE
     *
     * @example IMAGE
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'targetId'   => 'TargetId',
        'targetName' => 'TargetName',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleTargetList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
