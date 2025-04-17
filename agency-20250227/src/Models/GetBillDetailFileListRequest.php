<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20250227\Models;

use AlibabaCloud\Dara\Model;

class GetBillDetailFileListRequest extends Model
{
    /**
     * @var string
     */
    public $billMonth;

    /**
     * @var string
     */
    public $ossAccessKeyId;

    /**
     * @var string
     */
    public $ossAccessKeySecret;

    /**
     * @var string
     */
    public $ossBucketName;

    /**
     * @var string
     */
    public $ossEndpoint;

    /**
     * @var string
     */
    public $ossRegion;

    /**
     * @var string
     */
    public $ossSecurityToken;
    protected $_name = [
        'billMonth' => 'BillMonth',
        'ossAccessKeyId' => 'OssAccessKeyId',
        'ossAccessKeySecret' => 'OssAccessKeySecret',
        'ossBucketName' => 'OssBucketName',
        'ossEndpoint' => 'OssEndpoint',
        'ossRegion' => 'OssRegion',
        'ossSecurityToken' => 'OssSecurityToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billMonth) {
            $res['BillMonth'] = $this->billMonth;
        }

        if (null !== $this->ossAccessKeyId) {
            $res['OssAccessKeyId'] = $this->ossAccessKeyId;
        }

        if (null !== $this->ossAccessKeySecret) {
            $res['OssAccessKeySecret'] = $this->ossAccessKeySecret;
        }

        if (null !== $this->ossBucketName) {
            $res['OssBucketName'] = $this->ossBucketName;
        }

        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }

        if (null !== $this->ossRegion) {
            $res['OssRegion'] = $this->ossRegion;
        }

        if (null !== $this->ossSecurityToken) {
            $res['OssSecurityToken'] = $this->ossSecurityToken;
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
        if (isset($map['BillMonth'])) {
            $model->billMonth = $map['BillMonth'];
        }

        if (isset($map['OssAccessKeyId'])) {
            $model->ossAccessKeyId = $map['OssAccessKeyId'];
        }

        if (isset($map['OssAccessKeySecret'])) {
            $model->ossAccessKeySecret = $map['OssAccessKeySecret'];
        }

        if (isset($map['OssBucketName'])) {
            $model->ossBucketName = $map['OssBucketName'];
        }

        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }

        if (isset($map['OssRegion'])) {
            $model->ossRegion = $map['OssRegion'];
        }

        if (isset($map['OssSecurityToken'])) {
            $model->ossSecurityToken = $map['OssSecurityToken'];
        }

        return $model;
    }
}
