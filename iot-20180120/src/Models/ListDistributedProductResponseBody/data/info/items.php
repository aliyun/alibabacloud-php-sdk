<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListDistributedProductResponseBody\data\info;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The time when the distribution task was created.
     *
     * @example 1581595942
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The **ProductKey** of the product.
     *
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The ID of the source instance to which the product belongs.
     *
     * @example iot-cn-6ja***
     *
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @description The name of the source instance to which the product belongs.
     *
     * @example myproInstance
     *
     * @var string
     */
    public $sourceInstanceName;

    /**
     * @description The source region to which the product belongs.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $sourceRegion;

    /**
     * @description The ID of the Alibaba Cloud account that is used to distribute the product. You can distribute products across regions and instances only within the same Alibaba cloud account. The value of this parameter is the same as the value of the **TargetUid** parameter.
     *
     * @example 198***
     *
     * @var string
     */
    public $sourceUid;

    /**
     * @description The name of the Alibaba Cloud account to which the product is distributed.
     *
     * @example io****@example.com
     *
     * @var string
     */
    public $targetAliyunId;

    /**
     * @description The ID of the destination instance to which the product is distributed.
     *
     * @example iot-cn-09k***
     *
     * @var string
     */
    public $targetInstanceId;

    /**
     * @description The name of the destination instance to which the product is distributed.
     *
     * @example newinstance
     *
     * @var string
     */
    public $targetInstanceName;

    /**
     * @description The destination region to which the product is distributed.
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $targetRegion;

    /**
     * @description The ID of the Alibaba Cloud account to which the product is distributed.
     *
     * You can distribute devices across regions and instances only within the same Alibaba cloud account. The value of this parameter is the same as the value of the **TargetUid** parameter.
     * @example 198***
     *
     * @var string
     */
    public $targetUid;
    protected $_name = [
        'gmtCreate'          => 'GmtCreate',
        'productKey'         => 'ProductKey',
        'sourceInstanceId'   => 'SourceInstanceId',
        'sourceInstanceName' => 'SourceInstanceName',
        'sourceRegion'       => 'SourceRegion',
        'sourceUid'          => 'SourceUid',
        'targetAliyunId'     => 'TargetAliyunId',
        'targetInstanceId'   => 'TargetInstanceId',
        'targetInstanceName' => 'TargetInstanceName',
        'targetRegion'       => 'TargetRegion',
        'targetUid'          => 'TargetUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
        }
        if (null !== $this->sourceInstanceName) {
            $res['SourceInstanceName'] = $this->sourceInstanceName;
        }
        if (null !== $this->sourceRegion) {
            $res['SourceRegion'] = $this->sourceRegion;
        }
        if (null !== $this->sourceUid) {
            $res['SourceUid'] = $this->sourceUid;
        }
        if (null !== $this->targetAliyunId) {
            $res['TargetAliyunId'] = $this->targetAliyunId;
        }
        if (null !== $this->targetInstanceId) {
            $res['TargetInstanceId'] = $this->targetInstanceId;
        }
        if (null !== $this->targetInstanceName) {
            $res['TargetInstanceName'] = $this->targetInstanceName;
        }
        if (null !== $this->targetRegion) {
            $res['TargetRegion'] = $this->targetRegion;
        }
        if (null !== $this->targetUid) {
            $res['TargetUid'] = $this->targetUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['SourceInstanceId'])) {
            $model->sourceInstanceId = $map['SourceInstanceId'];
        }
        if (isset($map['SourceInstanceName'])) {
            $model->sourceInstanceName = $map['SourceInstanceName'];
        }
        if (isset($map['SourceRegion'])) {
            $model->sourceRegion = $map['SourceRegion'];
        }
        if (isset($map['SourceUid'])) {
            $model->sourceUid = $map['SourceUid'];
        }
        if (isset($map['TargetAliyunId'])) {
            $model->targetAliyunId = $map['TargetAliyunId'];
        }
        if (isset($map['TargetInstanceId'])) {
            $model->targetInstanceId = $map['TargetInstanceId'];
        }
        if (isset($map['TargetInstanceName'])) {
            $model->targetInstanceName = $map['TargetInstanceName'];
        }
        if (isset($map['TargetRegion'])) {
            $model->targetRegion = $map['TargetRegion'];
        }
        if (isset($map['TargetUid'])) {
            $model->targetUid = $map['TargetUid'];
        }

        return $model;
    }
}
