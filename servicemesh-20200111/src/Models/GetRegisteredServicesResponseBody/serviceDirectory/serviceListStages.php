<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServicesResponseBody\serviceDirectory;

use AlibabaCloud\Tea\Model;

class serviceListStages extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $marker;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'marker'    => 'Marker',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceListStages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }

        return $model;
    }
}
