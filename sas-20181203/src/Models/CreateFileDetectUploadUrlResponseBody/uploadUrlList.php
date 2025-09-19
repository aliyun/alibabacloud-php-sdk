<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateFileDetectUploadUrlResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateFileDetectUploadUrlResponseBody\uploadUrlList\context;

class uploadUrlList extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var context
     */
    public $context;

    /**
     * @var string
     */
    public $expire;

    /**
     * @var bool
     */
    public $fileExist;

    /**
     * @var string
     */
    public $hashKey;

    /**
     * @var string
     */
    public $internalUrl;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $publicUrl;
    protected $_name = [
        'code' => 'Code',
        'context' => 'Context',
        'expire' => 'Expire',
        'fileExist' => 'FileExist',
        'hashKey' => 'HashKey',
        'internalUrl' => 'InternalUrl',
        'message' => 'Message',
        'publicUrl' => 'PublicUrl',
    ];

    public function validate()
    {
        if (null !== $this->context) {
            $this->context->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->context) {
            $res['Context'] = null !== $this->context ? $this->context->toArray($noStream) : $this->context;
        }

        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }

        if (null !== $this->fileExist) {
            $res['FileExist'] = $this->fileExist;
        }

        if (null !== $this->hashKey) {
            $res['HashKey'] = $this->hashKey;
        }

        if (null !== $this->internalUrl) {
            $res['InternalUrl'] = $this->internalUrl;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->publicUrl) {
            $res['PublicUrl'] = $this->publicUrl;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Context'])) {
            $model->context = context::fromMap($map['Context']);
        }

        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }

        if (isset($map['FileExist'])) {
            $model->fileExist = $map['FileExist'];
        }

        if (isset($map['HashKey'])) {
            $model->hashKey = $map['HashKey'];
        }

        if (isset($map['InternalUrl'])) {
            $model->internalUrl = $map['InternalUrl'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['PublicUrl'])) {
            $model->publicUrl = $map['PublicUrl'];
        }

        return $model;
    }
}
