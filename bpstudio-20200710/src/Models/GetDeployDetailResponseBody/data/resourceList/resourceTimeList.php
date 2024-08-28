<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20200710\Models\GetDeployDetailResponseBody\data\resourceList;

use AlibabaCloud\Tea\Model;

class resourceTimeList extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $creationEndTime;

    /**
     * @var int
     */
    public $creationStartTime;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'bizId'             => 'BizId',
        'creationEndTime'   => 'CreationEndTime',
        'creationStartTime' => 'CreationStartTime',
        'id'                => 'id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->creationEndTime) {
            $res['CreationEndTime'] = $this->creationEndTime;
        }
        if (null !== $this->creationStartTime) {
            $res['CreationStartTime'] = $this->creationStartTime;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceTimeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['CreationEndTime'])) {
            $model->creationEndTime = $map['CreationEndTime'];
        }
        if (isset($map['CreationStartTime'])) {
            $model->creationStartTime = $map['CreationStartTime'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        return $model;
    }
}
