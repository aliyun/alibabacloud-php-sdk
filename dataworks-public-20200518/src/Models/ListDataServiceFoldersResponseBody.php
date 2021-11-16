<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceFoldersResponseBody\folderPagingResult;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->folderPagingResult) {
            $res['FolderPagingResult'] = null !== $this->folderPagingResult ? $this->folderPagingResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['FolderPagingResult'])) {
            $model->folderPagingResult = folderPagingResult::fromMap($map['FolderPagingResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
