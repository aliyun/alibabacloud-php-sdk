<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingResponseBody\payload;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingResponseBody\payload\output\articles;

class output extends Model
{
    /**
     * @var articles[]
     */
    public $articles;

    /**
     * @var string[]
     */
    public $miniDoc;

    /**
     * @var string
     */
    public $searchQuery;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'articles' => 'Articles',
        'miniDoc' => 'MiniDoc',
        'searchQuery' => 'SearchQuery',
        'text' => 'Text',
    ];

    public function validate()
    {
        if (\is_array($this->articles)) {
            Model::validateArray($this->articles);
        }
        if (\is_array($this->miniDoc)) {
            Model::validateArray($this->miniDoc);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->articles) {
            if (\is_array($this->articles)) {
                $res['Articles'] = [];
                $n1 = 0;
                foreach ($this->articles as $item1) {
                    $res['Articles'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->miniDoc) {
            if (\is_array($this->miniDoc)) {
                $res['MiniDoc'] = [];
                $n1 = 0;
                foreach ($this->miniDoc as $item1) {
                    $res['MiniDoc'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->searchQuery) {
            $res['SearchQuery'] = $this->searchQuery;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
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
        if (isset($map['Articles'])) {
            if (!empty($map['Articles'])) {
                $model->articles = [];
                $n1 = 0;
                foreach ($map['Articles'] as $item1) {
                    $model->articles[$n1++] = articles::fromMap($item1);
                }
            }
        }

        if (isset($map['MiniDoc'])) {
            if (!empty($map['MiniDoc'])) {
                $model->miniDoc = [];
                $n1 = 0;
                foreach ($map['MiniDoc'] as $item1) {
                    $model->miniDoc[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SearchQuery'])) {
            $model->searchQuery = $map['SearchQuery'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
