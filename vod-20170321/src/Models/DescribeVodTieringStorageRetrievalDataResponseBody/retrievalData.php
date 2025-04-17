<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTieringStorageRetrievalDataResponseBody;

use AlibabaCloud\Dara\Model;

class retrievalData extends Model
{
    /**
     * @var int
     */
    public $CABulkRetrievalData;

    /**
     * @var int
     */
    public $CAHighPriorRetrievalData;

    /**
     * @var int
     */
    public $CAStdRetrievalData;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $retrievalData;

    /**
     * @var string
     */
    public $storageClass;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'CABulkRetrievalData' => 'CABulkRetrievalData',
        'CAHighPriorRetrievalData' => 'CAHighPriorRetrievalData',
        'CAStdRetrievalData' => 'CAStdRetrievalData',
        'region' => 'Region',
        'retrievalData' => 'RetrievalData',
        'storageClass' => 'StorageClass',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CABulkRetrievalData) {
            $res['CABulkRetrievalData'] = $this->CABulkRetrievalData;
        }

        if (null !== $this->CAHighPriorRetrievalData) {
            $res['CAHighPriorRetrievalData'] = $this->CAHighPriorRetrievalData;
        }

        if (null !== $this->CAStdRetrievalData) {
            $res['CAStdRetrievalData'] = $this->CAStdRetrievalData;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->retrievalData) {
            $res['RetrievalData'] = $this->retrievalData;
        }

        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }

        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
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
        if (isset($map['CABulkRetrievalData'])) {
            $model->CABulkRetrievalData = $map['CABulkRetrievalData'];
        }

        if (isset($map['CAHighPriorRetrievalData'])) {
            $model->CAHighPriorRetrievalData = $map['CAHighPriorRetrievalData'];
        }

        if (isset($map['CAStdRetrievalData'])) {
            $model->CAStdRetrievalData = $map['CAStdRetrievalData'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['RetrievalData'])) {
            $model->retrievalData = $map['RetrievalData'];
        }

        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }

        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
