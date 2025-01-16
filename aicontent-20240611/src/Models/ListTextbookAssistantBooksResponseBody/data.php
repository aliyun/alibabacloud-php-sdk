<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBooksResponseBody;

use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBooksResponseBody\data\bookList;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBooksResponseBody\data\paginationData;
use AlibabaCloud\Tea\Model;

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
        'bookList'       => 'bookList',
        'paginationData' => 'paginationData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bookList) {
            $res['bookList'] = [];
            if (null !== $this->bookList && \is_array($this->bookList)) {
                $n = 0;
                foreach ($this->bookList as $item) {
                    $res['bookList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->paginationData) {
            $res['paginationData'] = null !== $this->paginationData ? $this->paginationData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bookList'])) {
            if (!empty($map['bookList'])) {
                $model->bookList = [];
                $n               = 0;
                foreach ($map['bookList'] as $item) {
                    $model->bookList[$n++] = null !== $item ? bookList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['paginationData'])) {
            $model->paginationData = paginationData::fromMap($map['paginationData']);
        }

        return $model;
    }
}
