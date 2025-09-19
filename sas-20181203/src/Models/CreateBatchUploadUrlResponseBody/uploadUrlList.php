<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateBatchUploadUrlResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateBatchUploadUrlResponseBody\uploadUrlList\context;

class uploadUrlList extends Model
{
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
    public $internalUrl;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $publicUrl;
    protected $_name = [
        'context' => 'Context',
        'expire' => 'Expire',
        'fileExist' => 'FileExist',
        'internalUrl' => 'InternalUrl',
        'md5' => 'Md5',
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
        if (null !== $this->context) {
            $res['Context'] = null !== $this->context ? $this->context->toArray($noStream) : $this->context;
        }

        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }

        if (null !== $this->fileExist) {
            $res['FileExist'] = $this->fileExist;
        }

        if (null !== $this->internalUrl) {
            $res['InternalUrl'] = $this->internalUrl;
        }

        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
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
        if (isset($map['Context'])) {
            $model->context = context::fromMap($map['Context']);
        }

        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }

        if (isset($map['FileExist'])) {
            $model->fileExist = $map['FileExist'];
        }

        if (isset($map['InternalUrl'])) {
            $model->internalUrl = $map['InternalUrl'];
        }

        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }

        if (isset($map['PublicUrl'])) {
            $model->publicUrl = $map['PublicUrl'];
        }

        return $model;
    }
}
