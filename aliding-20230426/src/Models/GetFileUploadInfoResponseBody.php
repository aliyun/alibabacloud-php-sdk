<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFileUploadInfoResponseBody\headerSignatureInfo;

class GetFileUploadInfoResponseBody extends Model
{
    /**
     * @var headerSignatureInfo
     */
    public $headerSignatureInfo;
    /**
     * @var string
     */
    public $protocol;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $storageDriver;
    /**
     * @var string
     */
    public $uploadKey;
    /**
     * @var string
     */
    public $vendorRequestId;
    /**
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'headerSignatureInfo' => 'headerSignatureInfo',
        'protocol'            => 'protocol',
        'requestId'           => 'requestId',
        'storageDriver'       => 'storageDriver',
        'uploadKey'           => 'uploadKey',
        'vendorRequestId'     => 'vendorRequestId',
        'vendorType'          => 'vendorType',
    ];

    public function validate()
    {
        if (null !== $this->headerSignatureInfo) {
            $this->headerSignatureInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->headerSignatureInfo) {
            $res['headerSignatureInfo'] = null !== $this->headerSignatureInfo ? $this->headerSignatureInfo->toArray($noStream) : $this->headerSignatureInfo;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
