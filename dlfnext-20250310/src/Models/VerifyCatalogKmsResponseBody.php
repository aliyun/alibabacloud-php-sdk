<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class VerifyCatalogKmsResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $hint;

    /**
     * @var string
     */
    public $kmsKeyId;

    /**
     * @var string
     */
    public $serverSideEncryption;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode' => 'errorCode',
        'hint' => 'hint',
        'kmsKeyId' => 'kmsKeyId',
        'serverSideEncryption' => 'serverSideEncryption',
        'success' => 'success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->hint) {
            $res['hint'] = $this->hint;
        }

        if (null !== $this->kmsKeyId) {
            $res['kmsKeyId'] = $this->kmsKeyId;
        }

        if (null !== $this->serverSideEncryption) {
            $res['serverSideEncryption'] = $this->serverSideEncryption;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
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
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['hint'])) {
            $model->hint = $map['hint'];
        }

        if (isset($map['kmsKeyId'])) {
            $model->kmsKeyId = $map['kmsKeyId'];
        }

        if (isset($map['serverSideEncryption'])) {
            $model->serverSideEncryption = $map['serverSideEncryption'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
