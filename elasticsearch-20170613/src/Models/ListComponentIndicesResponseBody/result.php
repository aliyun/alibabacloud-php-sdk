<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListComponentIndicesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListComponentIndicesResponseBody\result\content;

class result extends Model
{
    /**
     * @var string[]
     */
    public $composed;

    /**
     * @var content
     */
    public $content;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'composed' => 'composed',
        'content' => 'content',
        'name' => 'name',
    ];

    public function validate()
    {
        if (\is_array($this->composed)) {
            Model::validateArray($this->composed);
        }
        if (null !== $this->content) {
            $this->content->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->composed) {
            if (\is_array($this->composed)) {
                $res['composed'] = [];
                $n1 = 0;
                foreach ($this->composed as $item1) {
                    $res['composed'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->content) {
            $res['content'] = null !== $this->content ? $this->content->toArray($noStream) : $this->content;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['composed'])) {
            if (!empty($map['composed'])) {
                $model->composed = [];
                $n1 = 0;
                foreach ($map['composed'] as $item1) {
                    $model->composed[$n1++] = $item1;
                }
            }
        }

        if (isset($map['content'])) {
            $model->content = content::fromMap($map['content']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
