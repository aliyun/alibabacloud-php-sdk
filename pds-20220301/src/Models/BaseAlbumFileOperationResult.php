<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class BaseAlbumFileOperationResult extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var CommonFileItem
     */
    public $file;

    /**
     * @var bool
     */
    public $isSucceed;
    protected $_name = [
        'errorCode' => 'error_code',
        'errorMessage' => 'error_message',
        'file' => 'file',
        'isSucceed' => 'is_succeed',
    ];

    public function validate()
    {
        if (null !== $this->file) {
            $this->file->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['error_code'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['error_message'] = $this->errorMessage;
        }

        if (null !== $this->file) {
            $res['file'] = null !== $this->file ? $this->file->toArray($noStream) : $this->file;
        }

        if (null !== $this->isSucceed) {
            $res['is_succeed'] = $this->isSucceed;
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
        if (isset($map['error_code'])) {
            $model->errorCode = $map['error_code'];
        }

        if (isset($map['error_message'])) {
            $model->errorMessage = $map['error_message'];
        }

        if (isset($map['file'])) {
            $model->file = CommonFileItem::fromMap($map['file']);
        }

        if (isset($map['is_succeed'])) {
            $model->isSucceed = $map['is_succeed'];
        }

        return $model;
    }
}
