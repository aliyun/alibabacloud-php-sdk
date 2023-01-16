<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\AddImageMosaicRequest;

use AlibabaCloud\SDK\Imm\V20200930\Models\AddImageMosaicRequest\targets\boundary;
use AlibabaCloud\Tea\Model;

class targets extends Model
{
    /**
     * @example 3
     *
     * @var int
     */
    public $blurRadius;

    /**
     * @var boundary
     */
    public $boundary;

    /**
     * @example #FFFFFF
     *
     * @var string
     */
    public $color;

    /**
     * @example 5
     *
     * @var int
     */
    public $mosaicRadius;

    /**
     * @example 5
     *
     * @var int
     */
    public $sigma;

    /**
     * @example square
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'blurRadius'   => 'BlurRadius',
        'boundary'     => 'Boundary',
        'color'        => 'Color',
        'mosaicRadius' => 'MosaicRadius',
        'sigma'        => 'Sigma',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blurRadius) {
            $res['BlurRadius'] = $this->blurRadius;
        }
        if (null !== $this->boundary) {
            $res['Boundary'] = null !== $this->boundary ? $this->boundary->toMap() : null;
        }
        if (null !== $this->color) {
            $res['Color'] = $this->color;
        }
        if (null !== $this->mosaicRadius) {
            $res['MosaicRadius'] = $this->mosaicRadius;
        }
        if (null !== $this->sigma) {
            $res['Sigma'] = $this->sigma;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlurRadius'])) {
            $model->blurRadius = $map['BlurRadius'];
        }
        if (isset($map['Boundary'])) {
            $model->boundary = boundary::fromMap($map['Boundary']);
        }
        if (isset($map['Color'])) {
            $model->color = $map['Color'];
        }
        if (isset($map['MosaicRadius'])) {
            $model->mosaicRadius = $map['MosaicRadius'];
        }
        if (isset($map['Sigma'])) {
            $model->sigma = $map['Sigma'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
