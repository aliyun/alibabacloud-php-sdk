<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceKeywordsResponseBody;

use AlibabaCloud\Dara\Model;

class words extends Model
{
    /**
     * @var string[]
     */
    public $word;
    protected $_name = [
        'word' => 'word',
    ];

    public function validate()
    {
        if (\is_array($this->word)) {
            Model::validateArray($this->word);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->word) {
            if (\is_array($this->word)) {
                $res['word'] = [];
                $n1          = 0;
                foreach ($this->word as $item1) {
                    $res['word'][$n1++] = $item1;
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
        if (isset($map['word'])) {
            if (!empty($map['word'])) {
                $model->word = [];
                $n1          = 0;
                foreach ($map['word'] as $item1) {
                    $model->word[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
