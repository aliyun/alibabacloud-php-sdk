<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingV2ResponseBody\payload;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingV2ResponseBody\payload\output\articles;
use AlibabaCloud\Tea\Model;

class output extends Model
{
    /**
     * @var articles[]
     */
    public $articles;

    /**
     * @example 文章精排之后的片段
     *
     * @var string[]
     */
    public $miniDoc;

    /**
     * @example 大模型改变世界
     *
     * @var string
     */
    public $searchQuery;

    /**
     * @example 文本生成结果
     *
     * @var string
     */
    public $text;
    protected $_name = [
        'articles' => 'Articles',
        'miniDoc' => 'MiniDoc',
        'searchQuery' => 'SearchQuery',
        'text' => 'Text',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->articles) {
            $res['Articles'] = [];
            if (null !== $this->articles && \is_array($this->articles)) {
                $n = 0;
                foreach ($this->articles as $item) {
                    $res['Articles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->miniDoc) {
            $res['MiniDoc'] = $this->miniDoc;
        }
        if (null !== $this->searchQuery) {
            $res['SearchQuery'] = $this->searchQuery;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return output
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Articles'])) {
            if (!empty($map['Articles'])) {
                $model->articles = [];
                $n = 0;
                foreach ($map['Articles'] as $item) {
                    $model->articles[$n++] = null !== $item ? articles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MiniDoc'])) {
            if (!empty($map['MiniDoc'])) {
                $model->miniDoc = $map['MiniDoc'];
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
