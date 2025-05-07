<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetWarningStrategyConfigResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetWarningStrategyConfigResponseBody\data\warningStrategyList\warningStrategyList;

class warningStrategyList extends Model
{
    /**
     * @var warningStrategyList[]
     */
    public $warningStrategyList;
    protected $_name = [
        'warningStrategyList' => 'warningStrategyList',
    ];

    public function validate()
    {
        if (\is_array($this->warningStrategyList)) {
            Model::validateArray($this->warningStrategyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->warningStrategyList) {
            if (\is_array($this->warningStrategyList)) {
                $res['warningStrategyList'] = [];
                $n1 = 0;
                foreach ($this->warningStrategyList as $item1) {
                    $res['warningStrategyList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['warningStrategyList'])) {
            if (!empty($map['warningStrategyList'])) {
                $model->warningStrategyList = [];
                $n1 = 0;
                foreach ($map['warningStrategyList'] as $item1) {
                    $model->warningStrategyList[$n1++] = self::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
