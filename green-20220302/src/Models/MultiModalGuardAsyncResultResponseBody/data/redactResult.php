<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\MultiModalGuardAsyncResultResponseBody\data;

use AlibabaCloud\Dara\Model;

class redactResult extends Model
{
    /**
     * @var string
     */
    public $processType;

    /**
     * @var string
     */
    public $resultOssBucketName;

    /**
     * @var string
     */
    public $resultOssObjectName;

    /**
     * @var string
     */
    public $resultOssRegionId;

    /**
     * @var string
     */
    public $resultUrl;

    /**
     * @var string
     */
    public $sourceUrl;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'processType' => 'ProcessType',
        'resultOssBucketName' => 'ResultOssBucketName',
        'resultOssObjectName' => 'ResultOssObjectName',
        'resultOssRegionId' => 'ResultOssRegionId',
        'resultUrl' => 'ResultUrl',
        'sourceUrl' => 'SourceUrl',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->processType) {
            $res['ProcessType'] = $this->processType;
        }

        if (null !== $this->resultOssBucketName) {
            $res['ResultOssBucketName'] = $this->resultOssBucketName;
        }

        if (null !== $this->resultOssObjectName) {
            $res['ResultOssObjectName'] = $this->resultOssObjectName;
        }

        if (null !== $this->resultOssRegionId) {
            $res['ResultOssRegionId'] = $this->resultOssRegionId;
        }

        if (null !== $this->resultUrl) {
            $res['ResultUrl'] = $this->resultUrl;
        }

        if (null !== $this->sourceUrl) {
            $res['SourceUrl'] = $this->sourceUrl;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ProcessType'])) {
            $model->processType = $map['ProcessType'];
        }

        if (isset($map['ResultOssBucketName'])) {
            $model->resultOssBucketName = $map['ResultOssBucketName'];
        }

        if (isset($map['ResultOssObjectName'])) {
            $model->resultOssObjectName = $map['ResultOssObjectName'];
        }

        if (isset($map['ResultOssRegionId'])) {
            $model->resultOssRegionId = $map['ResultOssRegionId'];
        }

        if (isset($map['ResultUrl'])) {
            $model->resultUrl = $map['ResultUrl'];
        }

        if (isset($map['SourceUrl'])) {
            $model->sourceUrl = $map['SourceUrl'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
