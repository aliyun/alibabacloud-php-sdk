<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class ListFoldersForParentRequest extends Model
{
    /**
     * @var string
     */
    public $parentFolderId;

    /**
     * @var string
     */
    public $queryKeyword;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'parentFolderId' => 'ParentFolderId',
        'queryKeyword'   => 'QueryKeyword',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parentFolderId) {
            $res['ParentFolderId'] = $this->parentFolderId;
        }
        if (null !== $this->queryKeyword) {
            $res['QueryKeyword'] = $this->queryKeyword;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFoldersForParentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParentFolderId'])) {
            $model->parentFolderId = $map['ParentFolderId'];
        }
        if (isset($map['QueryKeyword'])) {
            $model->queryKeyword = $map['QueryKeyword'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
