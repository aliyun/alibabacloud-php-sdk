<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceFoldersResponseBody\folderPagingResult;
use AlibabaCloud\Tea\Model;

class ListDataServiceFoldersResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var folderPagingResult
     */
    public $folderPagingResult;
    protected $_name = [
        'requestId'          => 'RequestId',
        'folderPagingResult' => 'FolderPagingResult',
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
        if (null !== $this->folderPagingResult) {
            $res['FolderPagingResult'] = null !== $this->folderPagingResult ? $this->folderPagingResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataServiceFoldersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FolderPagingResult'])) {
            $model->folderPagingResult = folderPagingResult::fromMap($map['FolderPagingResult']);
        }

        return $model;
    }
}
