<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\EnableResourceDirectoryResponseBody\resourceDirectory;
use AlibabaCloud\Tea\Model;

class EnableResourceDirectoryResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example EC2FE94D-A4A2-51A1-A493-5C273A36C46A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the resource directory.
     *
     * @var resourceDirectory
     */
    public $resourceDirectory;
    protected $_name = [
        'requestId' => 'RequestId',
        'resourceDirectory' => 'ResourceDirectory',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceDirectory) {
            $res['ResourceDirectory'] = null !== $this->resourceDirectory ? $this->resourceDirectory->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableResourceDirectoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceDirectory'])) {
            $model->resourceDirectory = resourceDirectory::fromMap($map['ResourceDirectory']);
        }

        return $model;
    }
}
