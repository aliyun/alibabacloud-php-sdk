<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListEnterprisePausesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListEnterprisePausesResponseBody\data\enterprisePauses;

class data extends Model
{
    /**
     * @var string
     */
    public $clinkRequestId;

    /**
     * @var enterprisePauses[]
     */
    public $enterprisePauses;
    protected $_name = [
        'clinkRequestId' => 'ClinkRequestId',
        'enterprisePauses' => 'EnterprisePauses',
    ];

    public function validate()
    {
        if (\is_array($this->enterprisePauses)) {
            Model::validateArray($this->enterprisePauses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clinkRequestId) {
            $res['ClinkRequestId'] = $this->clinkRequestId;
        }

        if (null !== $this->enterprisePauses) {
            if (\is_array($this->enterprisePauses)) {
                $res['EnterprisePauses'] = [];
                $n1 = 0;
                foreach ($this->enterprisePauses as $item1) {
                    $res['EnterprisePauses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ClinkRequestId'])) {
            $model->clinkRequestId = $map['ClinkRequestId'];
        }

        if (isset($map['EnterprisePauses'])) {
            if (!empty($map['EnterprisePauses'])) {
                $model->enterprisePauses = [];
                $n1 = 0;
                foreach ($map['EnterprisePauses'] as $item1) {
                    $model->enterprisePauses[$n1] = enterprisePauses::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
