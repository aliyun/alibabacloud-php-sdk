<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateFolderResponseBody\folder;
use AlibabaCloud\Tea\Model;

class CreateFolderResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var folder
     */
    public $folder;
    protected $_name = [
        'requestId' => 'RequestId',
        'folder'    => 'Folder',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->folder) {
            $res['Folder'] = null !== $this->folder ? $this->folder->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFolderResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Folder'])) {
            $model->folder = folder::fromMap($map['Folder']);
        }

        return $model;
    }
}
