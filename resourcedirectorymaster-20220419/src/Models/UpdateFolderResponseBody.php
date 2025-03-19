<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\UpdateFolderResponseBody\folder;
use AlibabaCloud\Tea\Model;

class UpdateFolderResponseBody extends Model
{
    /**
     * @description The information about the folder.
     *
     * @var folder
     */
    public $folder;

    /**
     * @description The ID of the request.
     *
     * @example C2CBCA30-C8DD-423E-B4AD-4FB694C9180C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'folder' => 'Folder',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

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
     * @return UpdateFolderResponseBody
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
