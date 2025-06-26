<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetFilterDocumentListRequest\and_;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetFilterDocumentListRequest\or_;

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
     * @var string
     */
    public $libraryId;

    /**
     * @var or_[]
     */
    public $or;

    /**
     * @var int
     */
    public $page;

    /**
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

    public function validate()
    {
        if (\is_array($this->and)) {
            Model::validateArray($this->and);
        }
        if (\is_array($this->docIdList)) {
            Model::validateArray($this->docIdList);
        }
        if (\is_array($this->or)) {
            Model::validateArray($this->or);
        }
        if (\is_array($this->status)) {
            Model::validateArray($this->status);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->and) {
            if (\is_array($this->and)) {
                $res['and'] = [];
                $n1 = 0;
                foreach ($this->and as $item1) {
                    $res['and'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->docIdList) {
            if (\is_array($this->docIdList)) {
                $res['docIdList'] = [];
                $n1 = 0;
                foreach ($this->docIdList as $item1) {
                    $res['docIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->libraryId) {
            $res['libraryId'] = $this->libraryId;
        }

        if (null !== $this->or) {
            if (\is_array($this->or)) {
                $res['or'] = [];
                $n1 = 0;
                foreach ($this->or as $item1) {
                    $res['or'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->status)) {
                $res['status'] = [];
                $n1 = 0;
                foreach ($this->status as $item1) {
                    $res['status'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['and'])) {
            if (!empty($map['and'])) {
                $model->and = [];
                $n1 = 0;
                foreach ($map['and'] as $item1) {
                    $model->and[$n1] = and_::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['docIdList'])) {
            if (!empty($map['docIdList'])) {
                $model->docIdList = [];
                $n1 = 0;
                foreach ($map['docIdList'] as $item1) {
                    $model->docIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['libraryId'])) {
            $model->libraryId = $map['libraryId'];
        }

        if (isset($map['or'])) {
            if (!empty($map['or'])) {
                $model->or = [];
                $n1 = 0;
                foreach ($map['or'] as $item1) {
                    $model->or[$n1] = or_::fromMap($item1);
                    ++$n1;
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
                $model->status = [];
                $n1 = 0;
                foreach ($map['status'] as $item1) {
                    $model->status[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
