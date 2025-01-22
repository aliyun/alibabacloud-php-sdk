<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;

class GetDocumentChunkListRequest extends Model
{
    /**
     * @var string[]
     */
    public $chunkIdList;
    /**
     * @var string
     */
    public $docId;
    /**
     * @var string
     */
    public $libraryId;
    /**
     * @var string
     */
    public $order;
    /**
     * @var string
     */
    public $orderBy;
    /**
     * @var int
     */
    public $page;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $searchQuery;
    protected $_name = [
        'chunkIdList' => 'chunkIdList',
        'docId'       => 'docId',
        'libraryId'   => 'libraryId',
        'order'       => 'order',
        'orderBy'     => 'orderBy',
        'page'        => 'page',
        'pageSize'    => 'pageSize',
        'searchQuery' => 'searchQuery',
    ];

    public function validate()
    {
        if (\is_array($this->chunkIdList)) {
            Model::validateArray($this->chunkIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkIdList) {
            if (\is_array($this->chunkIdList)) {
                $res['chunkIdList'] = [];
                $n1                 = 0;
                foreach ($this->chunkIdList as $item1) {
                    $res['chunkIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->docId) {
            $res['docId'] = $this->docId;
        }

        if (null !== $this->libraryId) {
            $res['libraryId'] = $this->libraryId;
        }

        if (null !== $this->order) {
            $res['order'] = $this->order;
        }

        if (null !== $this->orderBy) {
            $res['orderBy'] = $this->orderBy;
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->searchQuery) {
            $res['searchQuery'] = $this->searchQuery;
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
        if (isset($map['chunkIdList'])) {
            if (!empty($map['chunkIdList'])) {
                $model->chunkIdList = [];
                $n1                 = 0;
                foreach ($map['chunkIdList'] as $item1) {
                    $model->chunkIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['docId'])) {
            $model->docId = $map['docId'];
        }

        if (isset($map['libraryId'])) {
            $model->libraryId = $map['libraryId'];
        }

        if (isset($map['order'])) {
            $model->order = $map['order'];
        }

        if (isset($map['orderBy'])) {
            $model->orderBy = $map['orderBy'];
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['searchQuery'])) {
            $model->searchQuery = $map['searchQuery'];
        }

        return $model;
    }
}
