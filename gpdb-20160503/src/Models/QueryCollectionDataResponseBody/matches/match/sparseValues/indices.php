<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataResponseBody\matches\match\sparseValues;

use AlibabaCloud\Dara\Model;

class indices extends Model
{
    /**
     * @var int[]
     */
    public $indice;
    protected $_name = [
        'indice' => 'Indice',
    ];

    public function validate()
    {
        if (\is_array($this->indice)) {
            Model::validateArray($this->indice);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->indice) {
            if (\is_array($this->indice)) {
                $res['Indice'] = [];
                $n1 = 0;
                foreach ($this->indice as $item1) {
                    $res['Indice'][$n1] = $item1;
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
        if (isset($map['Indice'])) {
            if (!empty($map['Indice'])) {
                $model->indice = [];
                $n1 = 0;
                foreach ($map['Indice'] as $item1) {
                    $model->indice[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
