<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTieringStorageRetrievalDataResponseBody;

use AlibabaCloud\Tea\Model;

class retrievalData extends Model
{
    /**
     * @description The retrieved Cold Archive data in the bulk mode.
     *
     * @example 123
     *
     * @var int
     */
    public $CABulkRetrievalData;

    /**
     * @description The retrieved Cold Archive data in the expedited mode.
     *
     * @example 123
     *
     * @var int
     */
    public $CAHighPriorRetrievalData;

    /**
     * @description The retrieved Cold Archive data in the standard mode.
     *
     * @example 123
     *
     * @var int
     */
    public $CAStdRetrievalData;

    /**
     * @description The storage region.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @description The data retrieval information.
     *
     * @example 1234
     *
     * @var int
     */
    public $retrievalData;

    /**
     * @description The storage type.
     *
     * @example IA
     *
     * @var string
     */
    public $storageClass;

    /**
     * @description The timestamp of the returned data. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2023-06-02T10:20:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'CABulkRetrievalData'      => 'CABulkRetrievalData',
        'CAHighPriorRetrievalData' => 'CAHighPriorRetrievalData',
        'CAStdRetrievalData'       => 'CAStdRetrievalData',
        'region'                   => 'Region',
        'retrievalData'            => 'RetrievalData',
        'storageClass'             => 'StorageClass',
        'timeStamp'                => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return retrievalData
     */
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
