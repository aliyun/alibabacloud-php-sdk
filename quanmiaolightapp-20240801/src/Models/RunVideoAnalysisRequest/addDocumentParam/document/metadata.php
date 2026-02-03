<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisRequest\addDocumentParam\document;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisRequest\addDocumentParam\document\metadata\keyValues;

class metadata extends Model
{
    /**
     * @var keyValues[]
     */
    public $keyValues;
    protected $_name = [
        'keyValues' => 'keyValues',
    ];

    public function validate()
    {
        if (\is_array($this->keyValues)) {
            Model::validateArray($this->keyValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyValues) {
            if (\is_array($this->keyValues)) {
                $res['keyValues'] = [];
                $n1 = 0;
                foreach ($this->keyValues as $item1) {
                    $res['keyValues'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['keyValues'])) {
            if (!empty($map['keyValues'])) {
                $model->keyValues = [];
                $n1 = 0;
                foreach ($map['keyValues'] as $item1) {
                    $model->keyValues[$n1] = keyValues::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
