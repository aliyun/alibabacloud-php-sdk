<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBooksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBooksResponseBody\data\bookList;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBooksResponseBody\data\paginationData;

class data extends Model
{
    /**
     * @var bookList[]
     */
    public $bookList;

    /**
     * @var paginationData
     */
    public $paginationData;
    protected $_name = [
        'bookList' => 'bookList',
        'paginationData' => 'paginationData',
    ];

    public function validate()
    {
        if (\is_array($this->bookList)) {
            Model::validateArray($this->bookList);
        }
        if (null !== $this->paginationData) {
            $this->paginationData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bookList) {
            if (\is_array($this->bookList)) {
                $res['bookList'] = [];
                $n1 = 0;
                foreach ($this->bookList as $item1) {
                    $res['bookList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->paginationData) {
            $res['paginationData'] = null !== $this->paginationData ? $this->paginationData->toArray($noStream) : $this->paginationData;
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
        if (isset($map['bookList'])) {
            if (!empty($map['bookList'])) {
                $model->bookList = [];
                $n1 = 0;
                foreach ($map['bookList'] as $item1) {
                    $model->bookList[$n1++] = bookList::fromMap($item1);
                }
            }
        }

        if (isset($map['paginationData'])) {
            $model->paginationData = paginationData::fromMap($map['paginationData']);
        }

        return $model;
    }
}
