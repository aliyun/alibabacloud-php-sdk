<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DescribeOssBucketInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $isArchive;

    /**
     * @var bool
     */
    public $isBackToResource;

    /**
     * @var bool
     */
    public $isColdArchive;

    /**
     * @var bool
     */
    public $isFresh;

    /**
     * @var bool
     */
    public $isSupportServerSideEncryption;

    /**
     * @var bool
     */
    public $isVersioning;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $pollingInterval;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $storageSize;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'                          => 'Code',
        'isArchive'                     => 'IsArchive',
        'isBackToResource'              => 'IsBackToResource',
        'isColdArchive'                 => 'IsColdArchive',
        'isFresh'                       => 'IsFresh',
        'isSupportServerSideEncryption' => 'IsSupportServerSideEncryption',
        'isVersioning'                  => 'IsVersioning',
        'message'                       => 'Message',
        'pollingInterval'               => 'PollingInterval',
        'requestId'                     => 'RequestId',
        'storageSize'                   => 'StorageSize',
        'success'                       => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->isArchive) {
            $res['IsArchive'] = $this->isArchive;
        }
        if (null !== $this->isBackToResource) {
            $res['IsBackToResource'] = $this->isBackToResource;
        }
        if (null !== $this->isColdArchive) {
            $res['IsColdArchive'] = $this->isColdArchive;
        }
        if (null !== $this->isFresh) {
            $res['IsFresh'] = $this->isFresh;
        }
        if (null !== $this->isSupportServerSideEncryption) {
            $res['IsSupportServerSideEncryption'] = $this->isSupportServerSideEncryption;
        }
        if (null !== $this->isVersioning) {
            $res['IsVersioning'] = $this->isVersioning;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pollingInterval) {
            $res['PollingInterval'] = $this->pollingInterval;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOssBucketInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IsArchive'])) {
            $model->isArchive = $map['IsArchive'];
        }
        if (isset($map['IsBackToResource'])) {
            $model->isBackToResource = $map['IsBackToResource'];
        }
        if (isset($map['IsColdArchive'])) {
            $model->isColdArchive = $map['IsColdArchive'];
        }
        if (isset($map['IsFresh'])) {
            $model->isFresh = $map['IsFresh'];
        }
        if (isset($map['IsSupportServerSideEncryption'])) {
            $model->isSupportServerSideEncryption = $map['IsSupportServerSideEncryption'];
        }
        if (isset($map['IsVersioning'])) {
            $model->isVersioning = $map['IsVersioning'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PollingInterval'])) {
            $model->pollingInterval = $map['PollingInterval'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
