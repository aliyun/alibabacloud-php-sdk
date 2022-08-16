<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models\ListBatchOperateCardsTasksResponseBody;

use AlibabaCloud\SDK\CC5G\V20220314\Models\ListBatchOperateCardsTasksResponseBody\batchOperateCardsTasks\wirelessCloudConnectors;
use AlibabaCloud\Tea\Model;

class batchOperateCardsTasks extends Model
{
    /**
     * @var string
     */
    public $batchOperateCardsTaskId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $effectType;

    /**
     * @var string
     */
    public $iccidsOssFilePath;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $operateResultOssFilePath;

    /**
     * @var string
     */
    public $operateType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $threshold;

    /**
     * @var wirelessCloudConnectors[]
     */
    public $wirelessCloudConnectors;
    protected $_name = [
        'batchOperateCardsTaskId'  => 'BatchOperateCardsTaskId',
        'createTime'               => 'CreateTime',
        'description'              => 'Description',
        'effectType'               => 'EffectType',
        'iccidsOssFilePath'        => 'IccidsOssFilePath',
        'name'                     => 'Name',
        'operateResultOssFilePath' => 'OperateResultOssFilePath',
        'operateType'              => 'OperateType',
        'status'                   => 'Status',
        'threshold'                => 'Threshold',
        'wirelessCloudConnectors'  => 'WirelessCloudConnectors',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchOperateCardsTaskId) {
            $res['BatchOperateCardsTaskId'] = $this->batchOperateCardsTaskId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->effectType) {
            $res['EffectType'] = $this->effectType;
        }
        if (null !== $this->iccidsOssFilePath) {
            $res['IccidsOssFilePath'] = $this->iccidsOssFilePath;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operateResultOssFilePath) {
            $res['OperateResultOssFilePath'] = $this->operateResultOssFilePath;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->wirelessCloudConnectors) {
            $res['WirelessCloudConnectors'] = [];
            if (null !== $this->wirelessCloudConnectors && \is_array($this->wirelessCloudConnectors)) {
                $n = 0;
                foreach ($this->wirelessCloudConnectors as $item) {
                    $res['WirelessCloudConnectors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return batchOperateCardsTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchOperateCardsTaskId'])) {
            $model->batchOperateCardsTaskId = $map['BatchOperateCardsTaskId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EffectType'])) {
            $model->effectType = $map['EffectType'];
        }
        if (isset($map['IccidsOssFilePath'])) {
            $model->iccidsOssFilePath = $map['IccidsOssFilePath'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OperateResultOssFilePath'])) {
            $model->operateResultOssFilePath = $map['OperateResultOssFilePath'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['WirelessCloudConnectors'])) {
            if (!empty($map['WirelessCloudConnectors'])) {
                $model->wirelessCloudConnectors = [];
                $n                              = 0;
                foreach ($map['WirelessCloudConnectors'] as $item) {
                    $model->wirelessCloudConnectors[$n++] = null !== $item ? wirelessCloudConnectors::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
