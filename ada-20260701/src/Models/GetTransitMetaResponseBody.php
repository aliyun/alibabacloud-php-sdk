<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ada\V20260701\Models;

use AlibabaCloud\Dara\Model;

class GetTransitMetaResponseBody extends Model
{
    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var int
     */
    public $expireAt;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $transitId;
    protected $_name = [
        'downloadUrl' => 'DownloadUrl',
        'expireAt' => 'ExpireAt',
        'filePath' => 'FilePath',
        'requestId' => 'RequestId',
        'size' => 'Size',
        'status' => 'Status',
        'transitId' => 'TransitId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->expireAt) {
            $res['ExpireAt'] = $this->expireAt;
        }

        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->transitId) {
            $res['TransitId'] = $this->transitId;
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
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }

        if (isset($map['ExpireAt'])) {
            $model->expireAt = $map['ExpireAt'];
        }

        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TransitId'])) {
            $model->transitId = $map['TransitId'];
        }

        return $model;
    }
}
