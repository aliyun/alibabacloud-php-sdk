<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenVbrHealthCheckResponseBody;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenVbrHealthCheckResponseBody\vbrHealthChecks\vbrHealthCheck;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vbrHealthCheck) {
            $res['VbrHealthCheck'] = [];
            if (null !== $this->vbrHealthCheck && \is_array($this->vbrHealthCheck)) {
                $n = 0;
                foreach ($this->vbrHealthCheck as $item) {
                    $res['VbrHealthCheck'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vbrHealthChecks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VbrHealthCheck'])) {
            if (!empty($map['VbrHealthCheck'])) {
                $model->vbrHealthCheck = [];
                $n                     = 0;
                foreach ($map['VbrHealthCheck'] as $item) {
                    $model->vbrHealthCheck[$n++] = null !== $item ? vbrHealthCheck::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
