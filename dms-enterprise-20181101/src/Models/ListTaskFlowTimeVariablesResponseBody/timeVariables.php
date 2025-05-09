<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowTimeVariablesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowTimeVariablesResponseBody\timeVariables\timeVariable;

class timeVariables extends Model
{
    /**
     * @var timeVariable[]
     */
    public $timeVariable;
    protected $_name = [
        'timeVariable' => 'TimeVariable',
    ];

    public function validate()
    {
        if (\is_array($this->timeVariable)) {
            Model::validateArray($this->timeVariable);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->timeVariable) {
            if (\is_array($this->timeVariable)) {
                $res['TimeVariable'] = [];
                $n1 = 0;
                foreach ($this->timeVariable as $item1) {
                    $res['TimeVariable'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TimeVariable'])) {
            if (!empty($map['TimeVariable'])) {
                $model->timeVariable = [];
                $n1 = 0;
                foreach ($map['TimeVariable'] as $item1) {
                    $model->timeVariable[$n1++] = timeVariable::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
