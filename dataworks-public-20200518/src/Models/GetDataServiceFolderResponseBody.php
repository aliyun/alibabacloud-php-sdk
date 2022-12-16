<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceFolderResponseBody\folder;
use AlibabaCloud\Tea\Model;

class GetDataServiceFolderResponseBody extends Model
{
    /**
     * @var folder
     */
    public $folder;

    /**
     * @example 0000-ABCD-EF****
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
     * @return GetDataServiceFolderResponseBody
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
