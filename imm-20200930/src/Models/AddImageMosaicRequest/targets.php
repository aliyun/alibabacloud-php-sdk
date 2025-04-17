<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\AddImageMosaicRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\AddImageMosaicRequest\targets\boundary;

class targets extends Model
{
    /**
     * @var int
     */
    public $blurRadius;

    /**
     * @var boundary
     */
    public $boundary;

    /**
     * @var string
     */
    public $color;

    /**
     * @var int
     */
    public $mosaicRadius;

    /**
     * @var int
     */
    public $sigma;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'blurRadius' => 'BlurRadius',
        'boundary' => 'Boundary',
        'color' => 'Color',
        'mosaicRadius' => 'MosaicRadius',
        'sigma' => 'Sigma',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->boundary) {
            $this->boundary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blurRadius) {
            $res['BlurRadius'] = $this->blurRadius;
        }

        if (null !== $this->boundary) {
            $res['Boundary'] = null !== $this->boundary ? $this->boundary->toArray($noStream) : $this->boundary;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
