<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateFileDetectUploadUrlResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\CreateFileDetectUploadUrlResponseBody\uploadUrlList\context;
use AlibabaCloud\Tea\Model;

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
    public $hashKey;

    /**
     * @var string
     */
    public $internalUrl;

    /**
     * @var string
     */
    public $publicUrl;
    protected $_name = [
        'context'     => 'Context',
        'expire'      => 'Expire',
        'fileExist'   => 'FileExist',
        'hashKey'     => 'HashKey',
        'internalUrl' => 'InternalUrl',
        'publicUrl'   => 'PublicUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->context) {
            $res['Context'] = null !== $this->context ? $this->context->toMap() : null;
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
        if (null !== $this->publicUrl) {
            $res['PublicUrl'] = $this->publicUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return uploadUrlList
     */
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
        if (isset($map['HashKey'])) {
            $model->hashKey = $map['HashKey'];
        }
        if (isset($map['InternalUrl'])) {
            $model->internalUrl = $map['InternalUrl'];
        }
        if (isset($map['PublicUrl'])) {
            $model->publicUrl = $map['PublicUrl'];
        }

        return $model;
    }
}
