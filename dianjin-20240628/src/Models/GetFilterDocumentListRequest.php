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

use AlibabaCloud\SDK\DianJin\V20240628\Models\GetFilterDocumentListRequest\and_;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetFilterDocumentListRequest\or_;
use AlibabaCloud\Tea\Model;

class GetFilterDocumentListRequest extends Model
{
    /**
     * @var and_[]
     */
    public $and;

    /**
     * @var string[]
     */
    public $docIdList;

    /**
     * @description This parameter is required.
     *
     * @example cjshcxxxx
     *
     * @var string
     */
    public $libraryId;

    /**
     * @var or_[]
     */
    public $or;

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
     * @var string[]
     */
    public $status;
    protected $_name = [
        'and' => 'and',
        'docIdList' => 'docIdList',
        'libraryId' => 'libraryId',
        'or' => 'or',
        'page' => 'page',
        'pageSize' => 'pageSize',
        'status' => 'status',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->and) {
            $res['and'] = [];
            if (null !== $this->and && \is_array($this->and)) {
                $n = 0;
                foreach ($this->and as $item) {
                    $res['and'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->docIdList) {
            $res['docIdList'] = $this->docIdList;
        }
        if (null !== $this->libraryId) {
            $res['libraryId'] = $this->libraryId;
        }
        if (null !== $this->or) {
            $res['or'] = [];
            if (null !== $this->or && \is_array($this->or)) {
                $n = 0;
                foreach ($this->or as $item) {
                    $res['or'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFilterDocumentListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['and'])) {
            if (!empty($map['and'])) {
                $model->and = [];
                $n = 0;
                foreach ($map['and'] as $item) {
                    $model->and[$n++] = null !== $item ? and_::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['docIdList'])) {
            if (!empty($map['docIdList'])) {
                $model->docIdList = $map['docIdList'];
            }
        }
        if (isset($map['libraryId'])) {
            $model->libraryId = $map['libraryId'];
        }
        if (isset($map['or'])) {
            if (!empty($map['or'])) {
                $model->or = [];
                $n = 0;
                foreach ($map['or'] as $item) {
                    $model->or[$n++] = null !== $item ? or_::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['status'])) {
            if (!empty($map['status'])) {
                $model->status = $map['status'];
            }
        }

        return $model;
    }
}
