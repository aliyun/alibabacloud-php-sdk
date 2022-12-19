<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateFileDetectUploadUrlResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\CreateFileDetectUploadUrlResponseBody\uploadUrlList\context;
use AlibabaCloud\Tea\Model;

class uploadUrlList extends Model
{
    /**
     * @description The status code returned. The status code **200** indicates that the request was successful. Other status codes indicate that the request failed. You can identify the cause of the failure based on the status code.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

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
     * @description The identifier of the file.
     *
     * @example 0a212417e65c26ff133cfff28f6c****
     *
     * @var string
     */
    public $hashKey;

    /**
     * @description The internal endpoint of the URL to which the file is uploaded.
     *
     * @example http://example.com
     *
     * @var string
     */
    public $internalUrl;

    /**
     * @description The error message returned.
     *
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The public endpoint of the URL to which the file is uploaded.
     *
     * @example http://example.com
     *
     * @var string
     */
    public $publicUrl;
    protected $_name = [
        'code'        => 'Code',
        'context'     => 'Context',
        'expire'      => 'Expire',
        'fileExist'   => 'FileExist',
        'hashKey'     => 'HashKey',
        'internalUrl' => 'InternalUrl',
        'message'     => 'Message',
        'publicUrl'   => 'PublicUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
