<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceFolderResponseBody\folder;

class GetDataServiceFolderResponseBody extends Model
{
    /**
     * @var folder
     */
    public $folder;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'folder' => 'Folder',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->folder) {
            $this->folder->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->folder) {
            $res['Folder'] = null !== $this->folder ? $this->folder->toArray($noStream) : $this->folder;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
