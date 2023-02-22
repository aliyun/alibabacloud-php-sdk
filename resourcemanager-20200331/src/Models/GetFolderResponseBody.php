<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetFolderResponseBody\folder;
use AlibabaCloud\Tea\Model;

class GetFolderResponseBody extends Model
{
    /**
     * @var folder
     */
    public $folder;

    /**
     * @example C2CBCA30-C8DD-423E-B4AD-4FB694C9180C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'folder'    => 'Folder',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->folder) {
            $res['Folder'] = null !== $this->folder ? $this->folder->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFolderResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Folder'])) {
            $model->folder = folder::fromMap($map['Folder']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
