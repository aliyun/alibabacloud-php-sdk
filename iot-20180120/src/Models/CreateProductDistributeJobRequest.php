<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateProductDistributeJobRequest extends Model
{
    /**
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example iot-cn-st2***
     *
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @example io****@example.com
     *
     * @var string
     */
    public $targetAliyunId;

    /**
     * @example iot-cn-6ja***
     *
     * @var string
     */
    public $targetInstanceId;

    /**
     * @example 198***
     *
     * @var string
     */
    public $targetUid;
    protected $_name = [
        'productKey'       => 'ProductKey',
        'sourceInstanceId' => 'SourceInstanceId',
        'targetAliyunId'   => 'TargetAliyunId',
        'targetInstanceId' => 'TargetInstanceId',
        'targetUid'        => 'TargetUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
        }
        if (null !== $this->targetAliyunId) {
            $res['TargetAliyunId'] = $this->targetAliyunId;
        }
        if (null !== $this->targetInstanceId) {
            $res['TargetInstanceId'] = $this->targetInstanceId;
        }
        if (null !== $this->targetUid) {
            $res['TargetUid'] = $this->targetUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProductDistributeJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['SourceInstanceId'])) {
            $model->sourceInstanceId = $map['SourceInstanceId'];
        }
        if (isset($map['TargetAliyunId'])) {
            $model->targetAliyunId = $map['TargetAliyunId'];
        }
        if (isset($map['TargetInstanceId'])) {
            $model->targetInstanceId = $map['TargetInstanceId'];
        }
        if (isset($map['TargetUid'])) {
            $model->targetUid = $map['TargetUid'];
        }

        return $model;
    }
}
