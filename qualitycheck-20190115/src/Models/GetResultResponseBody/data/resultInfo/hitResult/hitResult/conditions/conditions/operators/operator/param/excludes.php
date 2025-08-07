<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators\operator\param;

use AlibabaCloud\Dara\Model;

class excludes extends Model
{
    /**
     * @var string[]
     */
    public $exclude;
    protected $_name = [
        'exclude' => 'Exclude',
    ];

    public function validate()
    {
        if (\is_array($this->exclude)) {
            Model::validateArray($this->exclude);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exclude) {
            if (\is_array($this->exclude)) {
                $res['Exclude'] = [];
                $n1 = 0;
                foreach ($this->exclude as $item1) {
                    $res['Exclude'][$n1] = $item1;
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
        if (isset($map['Exclude'])) {
            if (!empty($map['Exclude'])) {
                $model->exclude = [];
                $n1 = 0;
                foreach ($map['Exclude'] as $item1) {
                    $model->exclude[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
