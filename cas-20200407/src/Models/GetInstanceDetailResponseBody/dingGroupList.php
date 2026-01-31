<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\GetInstanceDetailResponseBody;

use AlibabaCloud\Dara\Model;

class dingGroupList extends Model
{
    /**
     * @var string
     */
    public $dingGroupInstanceId;

    /**
     * @var string
     */
    public $dingGroupName;

    /**
     * @var string
     */
    public $dingGroupType;

    /**
     * @var string
     */
    public $dingGroupUrl;
    protected $_name = [
        'dingGroupInstanceId' => 'DingGroupInstanceId',
        'dingGroupName' => 'DingGroupName',
        'dingGroupType' => 'DingGroupType',
        'dingGroupUrl' => 'DingGroupUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dingGroupInstanceId) {
            $res['DingGroupInstanceId'] = $this->dingGroupInstanceId;
        }

        if (null !== $this->dingGroupName) {
            $res['DingGroupName'] = $this->dingGroupName;
        }

        if (null !== $this->dingGroupType) {
            $res['DingGroupType'] = $this->dingGroupType;
        }

        if (null !== $this->dingGroupUrl) {
            $res['DingGroupUrl'] = $this->dingGroupUrl;
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
        if (isset($map['DingGroupInstanceId'])) {
            $model->dingGroupInstanceId = $map['DingGroupInstanceId'];
        }

        if (isset($map['DingGroupName'])) {
            $model->dingGroupName = $map['DingGroupName'];
        }

        if (isset($map['DingGroupType'])) {
            $model->dingGroupType = $map['DingGroupType'];
        }

        if (isset($map['DingGroupUrl'])) {
            $model->dingGroupUrl = $map['DingGroupUrl'];
        }

        return $model;
    }
}
