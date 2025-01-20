<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListHotNewsWithTypeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListHotNewsWithTypeResponseBody\data\news;

class data extends Model
{
    /**
     * @var news[]
     */
    public $news;
    /**
     * @var string
     */
    public $newsType;
    /**
     * @var string
     */
    public $newsTypeName;
    /**
     * @var int
     */
    public $totalPages;
    protected $_name = [
        'news'         => 'News',
        'newsType'     => 'NewsType',
        'newsTypeName' => 'NewsTypeName',
        'totalPages'   => 'TotalPages',
    ];

    public function validate()
    {
        if (\is_array($this->news)) {
            Model::validateArray($this->news);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->news) {
            if (\is_array($this->news)) {
                $res['News'] = [];
                $n1          = 0;
                foreach ($this->news as $item1) {
                    $res['News'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->newsType) {
            $res['NewsType'] = $this->newsType;
        }

        if (null !== $this->newsTypeName) {
            $res['NewsTypeName'] = $this->newsTypeName;
        }

        if (null !== $this->totalPages) {
            $res['TotalPages'] = $this->totalPages;
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
        if (isset($map['News'])) {
            if (!empty($map['News'])) {
                $model->news = [];
                $n1          = 0;
                foreach ($map['News'] as $item1) {
                    $model->news[$n1++] = news::fromMap($item1);
                }
            }
        }

        if (isset($map['NewsType'])) {
            $model->newsType = $map['NewsType'];
        }

        if (isset($map['NewsTypeName'])) {
            $model->newsTypeName = $map['NewsTypeName'];
        }

        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }

        return $model;
    }
}
