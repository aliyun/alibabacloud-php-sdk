<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models;

use AlibabaCloud\Dara\Model;

class GetDocumentRankRequest extends Model
{
    /**
     * @var string[]
     */
    public $docs;

    /**
     * @var string
     */
    public $query;
    protected $_name = [
        'docs' => 'docs',
        'query' => 'query',
    ];

    public function validate()
    {
        if (\is_array($this->docs)) {
            Model::validateArray($this->docs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docs) {
            if (\is_array($this->docs)) {
                $res['docs'] = [];
                $n1 = 0;
                foreach ($this->docs as $item1) {
                    $res['docs'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
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
        if (isset($map['docs'])) {
            if (!empty($map['docs'])) {
                $model->docs = [];
                $n1 = 0;
                foreach ($map['docs'] as $item1) {
                    $model->docs[$n1++] = $item1;
                }
            }
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        return $model;
    }
}
