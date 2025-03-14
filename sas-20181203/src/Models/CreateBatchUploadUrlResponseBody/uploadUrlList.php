<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateBatchUploadUrlResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\CreateBatchUploadUrlResponseBody\uploadUrlList\context;
use AlibabaCloud\Tea\Model;

class uploadUrlList extends Model
{
    /**
     * @description The signature information.
     *
     * @var context
     */
    public $context;

    /**
     * @description The timestamp when the values of the parameters expire. Unit: milliseconds.
     *
     * @example 1658562101370
     *
     * @var string
     */
    public $expire;

    /**
     * @description Indicates whether the file exists in the cloud. Valid values:
     *
     *   **true**: The file exists in the cloud. You do not need to upload the file.
     *   **false**: The file does not exist in the cloud. You must upload the file.
     *
     * @example false
     *
     * @var bool
     */
    public $fileExist;

    /**
     * @description The internal endpoint of the URL to which the file is uploaded.
     *
     * @example http://example.com
     *
     * @var string
     */
    public $internalUrl;

    /**
     * @description The identifier of the file.
     *
     * @example 2f8dc248a0fbb96c69e45acad2******
     *
     * @var string
     */
    public $md5;

    /**
     * @description The public endpoint of the URL to which the file is uploaded.
     *
     * @example http://example.com
     *
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

    public function validate() {}

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
