<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateFunctionResourceRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateFunctionResourceRequest\data\generators;

class data extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var generators[]
     */
    public $generators;
    protected $_name = [
        'content' => 'Content',
        'generators' => 'Generators',
    ];

    public function validate()
    {
        if (\is_array($this->generators)) {
            Model::validateArray($this->generators);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->generators) {
            if (\is_array($this->generators)) {
                $res['Generators'] = [];
                $n1 = 0;
                foreach ($this->generators as $item1) {
                    $res['Generators'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Generators'])) {
            if (!empty($map['Generators'])) {
                $model->generators = [];
                $n1 = 0;
                foreach ($map['Generators'] as $item1) {
                    $model->generators[$n1] = generators::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
