<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeCharacterSetResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $characterSet;

    /**
     * @var string
     */
    public $engine;
    protected $_name = [
        'characterSet' => 'CharacterSet',
        'engine' => 'Engine',
    ];

    public function validate()
    {
        if (\is_array($this->characterSet)) {
            Model::validateArray($this->characterSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->characterSet) {
            if (\is_array($this->characterSet)) {
                $res['CharacterSet'] = [];
                $n1 = 0;
                foreach ($this->characterSet as $item1) {
                    $res['CharacterSet'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
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
        if (isset($map['CharacterSet'])) {
            if (!empty($map['CharacterSet'])) {
                $model->characterSet = [];
                $n1 = 0;
                foreach ($map['CharacterSet'] as $item1) {
                    $model->characterSet[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        return $model;
    }
}
