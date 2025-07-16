<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFileUploadInfoResponseBody\headerSignatureInfo;
use AlibabaCloud\Tea\Model;

class GetFileUploadInfoResponseBody extends Model
{
    /**
     * @var headerSignatureInfo
     */
    public $headerSignatureInfo;

    /**
     * @example HEADER_SIGNATURE
     *
     * @var string
     */
    public $protocol;

    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @example DINGTALK
     *
     * @var string
     */
    public $storageDriver;

    /**
     * @example upload_key
     *
     * @var string
     */
    public $uploadKey;

    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $vendorRequestId;

    /**
     * @example dingtalk
     *
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'headerSignatureInfo' => 'headerSignatureInfo',
        'protocol' => 'protocol',
        'requestId' => 'requestId',
        'storageDriver' => 'storageDriver',
        'uploadKey' => 'uploadKey',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType' => 'vendorType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->headerSignatureInfo) {
            $res['headerSignatureInfo'] = null !== $this->headerSignatureInfo ? $this->headerSignatureInfo->toMap() : null;
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->storageDriver) {
            $res['storageDriver'] = $this->storageDriver;
        }
        if (null !== $this->uploadKey) {
            $res['uploadKey'] = $this->uploadKey;
        }
        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }
        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFileUploadInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['headerSignatureInfo'])) {
            $model->headerSignatureInfo = headerSignatureInfo::fromMap($map['headerSignatureInfo']);
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['storageDriver'])) {
            $model->storageDriver = $map['storageDriver'];
        }
        if (isset($map['uploadKey'])) {
            $model->uploadKey = $map['uploadKey'];
        }
        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }
        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
