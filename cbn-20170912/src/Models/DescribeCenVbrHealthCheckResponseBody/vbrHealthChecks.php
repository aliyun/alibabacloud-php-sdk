<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenVbrHealthCheckResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenVbrHealthCheckResponseBody\vbrHealthChecks\vbrHealthCheck;

class vbrHealthChecks extends Model
{
    /**
     * @var vbrHealthCheck[]
     */
    public $vbrHealthCheck;
    protected $_name = [
        'vbrHealthCheck' => 'VbrHealthCheck',
    ];

    public function validate()
    {
        if (\is_array($this->vbrHealthCheck)) {
            Model::validateArray($this->vbrHealthCheck);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vbrHealthCheck) {
            if (\is_array($this->vbrHealthCheck)) {
                $res['VbrHealthCheck'] = [];
                $n1 = 0;
                foreach ($this->vbrHealthCheck as $item1) {
                    $res['VbrHealthCheck'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['VbrHealthCheck'])) {
            if (!empty($map['VbrHealthCheck'])) {
                $model->vbrHealthCheck = [];
                $n1 = 0;
                foreach ($map['VbrHealthCheck'] as $item1) {
                    $model->vbrHealthCheck[$n1++] = vbrHealthCheck::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
