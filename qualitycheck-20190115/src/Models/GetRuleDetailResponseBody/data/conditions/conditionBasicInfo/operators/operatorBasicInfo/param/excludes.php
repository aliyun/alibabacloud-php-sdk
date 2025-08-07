<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators\operatorBasicInfo\param;

use AlibabaCloud\Dara\Model;

class excludes extends Model
{
    /**
     * @var string[]
     */
    public $excludes;
    protected $_name = [
        'excludes' => 'Excludes',
    ];

    public function validate()
    {
        if (\is_array($this->excludes)) {
            Model::validateArray($this->excludes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->excludes) {
            if (\is_array($this->excludes)) {
                $res['Excludes'] = [];
                $n1 = 0;
                foreach ($this->excludes as $item1) {
                    $res['Excludes'][$n1] = $item1;
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
        if (isset($map['Excludes'])) {
            if (!empty($map['Excludes'])) {
                $model->excludes = [];
                $n1 = 0;
                foreach ($map['Excludes'] as $item1) {
                    $model->excludes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
