<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class ListPartitionsByNamesRequest extends Model
{
    /**
     * @var string[][]
     */
    public $specs;
    protected $_name = [
        'specs' => 'specs',
    ];

    public function validate()
    {
        if (\is_array($this->specs)) {
            Model::validateArray($this->specs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->specs) {
            if (\is_array($this->specs)) {
                $res['specs'] = [];
                $n1 = 0;
                foreach ($this->specs as $item1) {
                    if (\is_array($item1)) {
                        $res['specs'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['specs'][$n1][$key2] = $value2;
                        }
                    }
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
        if (isset($map['specs'])) {
            if (!empty($map['specs'])) {
                $model->specs = [];
                $n1 = 0;
                foreach ($map['specs'] as $item1) {
                    if (!empty($item1)) {
                        $model->specs[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->specs[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
