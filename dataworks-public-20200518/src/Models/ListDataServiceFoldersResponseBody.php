<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceFoldersResponseBody\folderPagingResult;

class ListDataServiceFoldersResponseBody extends Model
{
    /**
     * @var folderPagingResult
     */
    public $folderPagingResult;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'folderPagingResult' => 'FolderPagingResult',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->folderPagingResult) {
            $this->folderPagingResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->folderPagingResult) {
            $res['FolderPagingResult'] = null !== $this->folderPagingResult ? $this->folderPagingResult->toArray($noStream) : $this->folderPagingResult;
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
        if (isset($map['FolderPagingResult'])) {
            $model->folderPagingResult = folderPagingResult::fromMap($map['FolderPagingResult']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
