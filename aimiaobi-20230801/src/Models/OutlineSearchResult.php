<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class OutlineSearchResult extends Model
{
    /**
     * @var OutlineWritingArticle[]
     */
    public $articles;

    /**
     * @var string
     */
    public $outline;

    /**
     * @var string
     */
    public $outlineId;

    /**
     * @var string
     */
    public $primaryOutline;

    /**
     * @var string
     */
    public $query;
    protected $_name = [
        'articles' => 'Articles',
        'outline' => 'Outline',
        'outlineId' => 'OutlineId',
        'primaryOutline' => 'PrimaryOutline',
        'query' => 'Query',
    ];

    public function validate()
    {
        if (\is_array($this->articles)) {
            Model::validateArray($this->articles);
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
                    $res['Articles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->outline) {
            $res['Outline'] = $this->outline;
        }

        if (null !== $this->outlineId) {
            $res['OutlineId'] = $this->outlineId;
        }

        if (null !== $this->primaryOutline) {
            $res['PrimaryOutline'] = $this->primaryOutline;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
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
                    $model->articles[$n1] = OutlineWritingArticle::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Outline'])) {
            $model->outline = $map['Outline'];
        }

        if (isset($map['OutlineId'])) {
            $model->outlineId = $map['OutlineId'];
        }

        if (isset($map['PrimaryOutline'])) {
            $model->primaryOutline = $map['PrimaryOutline'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        return $model;
    }
}
