<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class OsVersion extends Model
{
    /**
     * @example accessId
     *
     * @var string
     */
    public $accessId;

    /**
     * @example 2020-02-01
     *
     * @var string
     */
    public $createTime;

    /**
     * @example /sdkajd
     *
     * @var string
     */
    public $directory;

    /**
     * @example 2020-02-01
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example file
     *
     * @var string
     */
    public $fileName;

    /**
     * @example /filePath
     *
     * @var string
     */
    public $filePath;

    /**
     * @example daldk
     *
     * @var string
     */
    public $host;

    /**
     * @example 5750
     *
     * @var string
     */
    public $model;

    /**
     * @example 1.0
     *
     * @var string
     */
    public $osVersion;

    /**
     * @example osVersionId
     *
     * @var string
     */
    public $osVersionId;

    /**
     * @example sjfoae
     *
     * @var string
     */
    public $policy;

    /**
     * @example dkfja
     *
     * @var string
     */
    public $signature;

    /**
     * @example USED
     *
     * @var string
     */
    public $status;

    /**
     * @example HUAWEI
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'accessId'    => 'AccessId',
        'createTime'  => 'CreateTime',
        'directory'   => 'Directory',
        'expireTime'  => 'ExpireTime',
        'fileName'    => 'FileName',
        'filePath'    => 'FilePath',
        'host'        => 'Host',
        'model'       => 'Model',
        'osVersion'   => 'OsVersion',
        'osVersionId' => 'OsVersionId',
        'policy'      => 'Policy',
        'signature'   => 'Signature',
        'status'      => 'Status',
        'vendor'      => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessId) {
            $res['AccessId'] = $this->accessId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->directory) {
            $res['Directory'] = $this->directory;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->osVersion) {
            $res['OsVersion'] = $this->osVersion;
        }
        if (null !== $this->osVersionId) {
            $res['OsVersionId'] = $this->osVersionId;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OsVersion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Directory'])) {
            $model->directory = $map['Directory'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['OsVersion'])) {
            $model->osVersion = $map['OsVersion'];
        }
        if (isset($map['OsVersionId'])) {
            $model->osVersionId = $map['OsVersionId'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
