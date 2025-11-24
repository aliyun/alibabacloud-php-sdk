<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateNamespaceScopeSidecarConfigRequest;

use AlibabaCloud\Dara\Model;

class scaledSidecarResource extends Model
{
    /**
     * @var string
     */
    public $containerRef;

    /**
     * @var string
     */
    public $resourceCalculationStrategy;

    /**
     * @var int
     */
    public $resourcePercentage;
    protected $_name = [
        'containerRef' => 'ContainerRef',
        'resourceCalculationStrategy' => 'ResourceCalculationStrategy',
        'resourcePercentage' => 'ResourcePercentage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerRef) {
            $res['ContainerRef'] = $this->containerRef;
        }

        if (null !== $this->resourceCalculationStrategy) {
            $res['ResourceCalculationStrategy'] = $this->resourceCalculationStrategy;
        }

        if (null !== $this->resourcePercentage) {
            $res['ResourcePercentage'] = $this->resourcePercentage;
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
        if (isset($map['ContainerRef'])) {
            $model->containerRef = $map['ContainerRef'];
        }

        if (isset($map['ResourceCalculationStrategy'])) {
            $model->resourceCalculationStrategy = $map['ResourceCalculationStrategy'];
        }

        if (isset($map['ResourcePercentage'])) {
            $model->resourcePercentage = $map['ResourcePercentage'];
        }

        return $model;
    }
}
