<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceAccessDetailResponseBody;

use AlibabaCloud\Tea\Model;

class accessDetail extends Model
{
    /**
     * @var string
     */
    public $clusterIP;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ports;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'clusterIP' => 'ClusterIP',
        'name'      => 'Name',
        'ports'     => 'Ports',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterIP) {
            $res['ClusterIP'] = $this->clusterIP;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ports) {
            $res['Ports'] = $this->ports;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterIP'])) {
            $model->clusterIP = $map['ClusterIP'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Ports'])) {
            $model->ports = $map['Ports'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
