<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class PickOutboundNumbersRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $skillGroupIdList;
    protected $_name = [
        'instanceId'       => 'InstanceId',
        'calledNumber'     => 'CalledNumber',
        'count'            => 'Count',
        'skillGroupIdList' => 'SkillGroupIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->skillGroupIdList) {
            $res['SkillGroupIdList'] = $this->skillGroupIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PickOutboundNumbersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['SkillGroupIdList'])) {
            $model->skillGroupIdList = $map['SkillGroupIdList'];
        }

        return $model;
    }
}
