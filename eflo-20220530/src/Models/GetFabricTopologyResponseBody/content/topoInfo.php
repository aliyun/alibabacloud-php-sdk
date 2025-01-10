<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetFabricTopologyResponseBody\content;

use AlibabaCloud\Tea\Model;

class topoInfo extends Model
{
    /**
     * @description The resource name.
     *
     * @example core-1
     *
     * @var string
     */
    public $layerName;

    /**
     * @description Hierarchical resource types
     *
     * Valid value:
     *
     *   core: core layer.
     *   node: Lingjun node.
     *   lni: lingjun network interface controller.
     *   spine: backbone layer.
     *   leaf: access layer
     *
     * @example core
     *
     * @var string
     */
    public $layerType;

    /**
     * @description Next Level
     *
     * @var mixed[]
     */
    public $nextLayer;
    protected $_name = [
        'layerName' => 'LayerName',
        'layerType' => 'LayerType',
        'nextLayer' => 'NextLayer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->layerName) {
            $res['LayerName'] = $this->layerName;
        }
        if (null !== $this->layerType) {
            $res['LayerType'] = $this->layerType;
        }
        if (null !== $this->nextLayer) {
            $res['NextLayer'] = $this->nextLayer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topoInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LayerName'])) {
            $model->layerName = $map['LayerName'];
        }
        if (isset($map['LayerType'])) {
            $model->layerType = $map['LayerType'];
        }
        if (isset($map['NextLayer'])) {
            if (!empty($map['NextLayer'])) {
                $model->nextLayer = $map['NextLayer'];
            }
        }

        return $model;
    }
}
