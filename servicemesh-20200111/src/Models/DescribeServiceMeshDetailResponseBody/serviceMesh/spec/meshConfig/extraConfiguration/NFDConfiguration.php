<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration;

use AlibabaCloud\Tea\Model;

class NFDConfiguration extends Model
{
    /**
     * @description Indicates whether NFD is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description Indicates whether feature labels on nodes are cleared when NFD is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $NFDLabelPruned;
    protected $_name = [
        'enabled'        => 'Enabled',
        'NFDLabelPruned' => 'NFDLabelPruned',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->NFDLabelPruned) {
            $res['NFDLabelPruned'] = $this->NFDLabelPruned;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NFDConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['NFDLabelPruned'])) {
            $model->NFDLabelPruned = $map['NFDLabelPruned'];
        }

        return $model;
    }
}
