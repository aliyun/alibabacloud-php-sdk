<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentAnalyzeTaskStatusResponseBody\result;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var string[]
     */
    public $pages;
    protected $_name = [
        'content' => 'content',
        'contentType' => 'content_type',
        'pageNum' => 'page_num',
        'pages' => 'pages',
    ];

    public function validate()
    {
        if (\is_array($this->pages)) {
            Model::validateArray($this->pages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->contentType) {
            $res['content_type'] = $this->contentType;
        }

        if (null !== $this->pageNum) {
            $res['page_num'] = $this->pageNum;
        }

        if (null !== $this->pages) {
            if (\is_array($this->pages)) {
                $res['pages'] = [];
                $n1 = 0;
                foreach ($this->pages as $item1) {
                    $res['pages'][$n1] = $item1;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['content_type'])) {
            $model->contentType = $map['content_type'];
        }

        if (isset($map['page_num'])) {
            $model->pageNum = $map['page_num'];
        }

        if (isset($map['pages'])) {
            if (!empty($map['pages'])) {
                $model->pages = [];
                $n1 = 0;
                foreach ($map['pages'] as $item1) {
                    $model->pages[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
