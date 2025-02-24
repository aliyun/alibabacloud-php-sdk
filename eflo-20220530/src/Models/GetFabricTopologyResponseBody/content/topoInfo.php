<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetFabricTopologyResponseBody\content;

use AlibabaCloud\Dara\Model;

class topoInfo extends Model
{
    /**
     * @var string
     */
    public $layerName;
    /**
     * @var string
     */
    public $layerType;
    /**
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
        if (\is_array($this->nextLayer)) {
            Model::validateArray($this->nextLayer);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->layerName) {
            $res['LayerName'] = $this->layerName;
        }

        if (null !== $this->layerType) {
            $res['LayerType'] = $this->layerType;
        }

        if (null !== $this->nextLayer) {
            if (\is_array($this->nextLayer)) {
                $res['NextLayer'] = [];
                $n1               = 0;
                foreach ($this->nextLayer as $item1) {
                    $res['NextLayer'][$n1++] = $item1;
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
        if (isset($map['LayerName'])) {
            $model->layerName = $map['LayerName'];
        }

        if (isset($map['LayerType'])) {
            $model->layerType = $map['LayerType'];
        }

        if (isset($map['NextLayer'])) {
            if (!empty($map['NextLayer'])) {
                $model->nextLayer = [];
                $n1               = 0;
                foreach ($map['NextLayer'] as $item1) {
                    $model->nextLayer[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
