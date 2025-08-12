<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateGroupMetricRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateGroupMetricRulesResponseBody\resources\alertResult;

class resources extends Model
{
    /**
     * @var alertResult[]
     */
    public $alertResult;
    protected $_name = [
        'alertResult' => 'AlertResult',
    ];

    public function validate()
    {
        if (\is_array($this->alertResult)) {
            Model::validateArray($this->alertResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertResult) {
            if (\is_array($this->alertResult)) {
                $res['AlertResult'] = [];
                $n1 = 0;
                foreach ($this->alertResult as $item1) {
                    $res['AlertResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AlertResult'])) {
            if (!empty($map['AlertResult'])) {
                $model->alertResult = [];
                $n1 = 0;
                foreach ($map['AlertResult'] as $item1) {
                    $model->alertResult[$n1] = alertResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
