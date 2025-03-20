<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\UpdateEdgeContainerAppResourceReserveResponseBody;

use AlibabaCloud\Tea\Model;

class reserveSet extends Model
{
    /**
     * @example cmcc
     *
     * @var string
     */
    public $isp;

    /**
     * @example huazhong
     *
     * @var string
     */
    public $region;

    /**
     * @example 1
     *
     * @var int
     */
    public $replicas;
    protected $_name = [
        'isp' => 'Isp',
        'region' => 'Region',
        'replicas' => 'Replicas',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reserveSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }

        return $model;
    }
}
