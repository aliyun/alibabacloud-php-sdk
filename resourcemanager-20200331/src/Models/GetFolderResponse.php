<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetFolderResponse\folder;
use AlibabaCloud\Tea\Model;

class GetFolderResponse extends Model
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
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('folder', $this->folder, true);
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
     * @return GetFolderResponse
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
