<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListWarningConfigResponseBody\data\warningConfigInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListWarningConfigResponseBody\data\warningConfigInfo\ruleList\warningRule;

class ruleList extends Model
{
    /**
     * @var warningRule[]
     */
    public $warningRule;
    protected $_name = [
        'warningRule' => 'WarningRule',
    ];

    public function validate()
    {
        if (\is_array($this->warningRule)) {
            Model::validateArray($this->warningRule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->warningRule) {
            if (\is_array($this->warningRule)) {
                $res['WarningRule'] = [];
                $n1                 = 0;
                foreach ($this->warningRule as $item1) {
                    $res['WarningRule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['WarningRule'])) {
            if (!empty($map['WarningRule'])) {
                $model->warningRule = [];
                $n1                 = 0;
                foreach ($map['WarningRule'] as $item1) {
                    $model->warningRule[$n1++] = warningRule::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
