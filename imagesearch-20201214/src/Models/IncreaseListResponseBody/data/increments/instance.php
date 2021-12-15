<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models\IncreaseListResponseBody\data\increments;

use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $callbackAddress;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $errorUrl;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $utcCreate;

    /**
     * @var int
     */
    public $utcModified;
    protected $_name = [
        'bucketName'      => 'BucketName',
        'callbackAddress' => 'CallbackAddress',
        'code'            => 'Code',
        'errorUrl'        => 'ErrorUrl',
        'id'              => 'Id',
        'msg'             => 'Msg',
        'path'            => 'Path',
        'status'          => 'Status',
        'utcCreate'       => 'UtcCreate',
        'utcModified'     => 'UtcModified',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->callbackAddress) {
            $res['CallbackAddress'] = $this->callbackAddress;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->errorUrl) {
            $res['ErrorUrl'] = $this->errorUrl;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
        }
        if (null !== $this->utcModified) {
            $res['UtcModified'] = $this->utcModified;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['CallbackAddress'])) {
            $model->callbackAddress = $map['CallbackAddress'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrorUrl'])) {
            $model->errorUrl = $map['ErrorUrl'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }
        if (isset($map['UtcModified'])) {
            $model->utcModified = $map['UtcModified'];
        }

        return $model;
    }
}
