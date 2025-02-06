<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators\operatorBasicInfo\param;

use AlibabaCloud\Dara\Model;

class antModelInfo extends Model
{
    /**
     * @var string[]
     */
    public $antModelInfo;
    protected $_name = [
        'antModelInfo' => 'AntModelInfo',
    ];

    public function validate()
    {
        if (\is_array($this->antModelInfo)) {
            Model::validateArray($this->antModelInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->antModelInfo) {
            if (\is_array($this->antModelInfo)) {
                $res['AntModelInfo'] = [];
                $n1                  = 0;
                foreach ($this->antModelInfo as $item1) {
                    $res['AntModelInfo'][$n1++] = $item1;
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
        if (isset($map['AntModelInfo'])) {
            if (!empty($map['AntModelInfo'])) {
                $model->antModelInfo = [];
                $n1                  = 0;
                foreach ($map['AntModelInfo'] as $item1) {
                    $model->antModelInfo[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
