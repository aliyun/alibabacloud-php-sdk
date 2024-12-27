<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\AddStoryFilesResponseBody;

use AlibabaCloud\Tea\Model;

class files extends Model
{
    /**
     * @description The error code.
     *
     * @example ResourceNotFound
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message that is returned.
     *
     * @example The specified resource %s is not found.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The URI of the object.
     *
     * The OSS URI follows the `oss://{bucketname}/{objectname}` format, where `bucketname` is the name of the bucket in the same region as the current project and `objectname` is the path of the object with the extension included.
     * @example oss://test-bucket/test-object
     *
     * @var string
     */
    public $URI;
    protected $_name = [
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'URI'          => 'URI',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return files
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
