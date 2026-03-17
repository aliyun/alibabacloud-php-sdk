<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeFlowLogSagsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeFlowLogSagsResponseBody\sags\sag;

class sags extends Model
{
    /**
     * @var sag[]
     */
    public $sag;
    protected $_name = [
        'sag' => 'Sag',
    ];

    public function validate()
    {
        if (\is_array($this->sag)) {
            Model::validateArray($this->sag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sag) {
            if (\is_array($this->sag)) {
                $res['Sag'] = [];
                $n1 = 0;
                foreach ($this->sag as $item1) {
                    $res['Sag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Sag'])) {
            if (!empty($map['Sag'])) {
                $model->sag = [];
                $n1 = 0;
                foreach ($map['Sag'] as $item1) {
                    $model->sag[$n1] = sag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
