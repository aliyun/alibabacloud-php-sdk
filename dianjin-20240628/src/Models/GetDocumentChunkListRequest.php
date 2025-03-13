<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Tea\Model;

class GetDocumentChunkListRequest extends Model
{
    /**
     * @var string[]
     */
    public $chunkIdList;

    /**
     * @description This parameter is required.
     *
     * @example 182364872346
     *
     * @var string
     */
    public $docId;

    /**
     * @description This parameter is required.
     *
     * @example dsjgfdjgfxxx
     *
     * @var string
     */
    public $libraryId;

    /**
     * @example desc
     *
     * @var string
     */
    public $order;

    /**
     * @example gmtCreate
     *
     * @var string
     */
    public $orderBy;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example test
     *
     * @var string
     */
    public $searchQuery;
    protected $_name = [
        'chunkIdList' => 'chunkIdList',
        'docId' => 'docId',
        'libraryId' => 'libraryId',
        'order' => 'order',
        'orderBy' => 'orderBy',
        'page' => 'page',
        'pageSize' => 'pageSize',
        'searchQuery' => 'searchQuery',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->chunkIdList) {
            $res['chunkIdList'] = $this->chunkIdList;
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

    /**
     * @param array $map
     *
     * @return GetDocumentChunkListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['chunkIdList'])) {
            if (!empty($map['chunkIdList'])) {
                $model->chunkIdList = $map['chunkIdList'];
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
