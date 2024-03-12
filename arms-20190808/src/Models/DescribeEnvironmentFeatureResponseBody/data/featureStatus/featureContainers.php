<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvironmentFeatureResponseBody\data\featureStatus;

use AlibabaCloud\Tea\Model;

class featureContainers extends Model
{
    /**
     * @description The container parameters.
     *
     * @var string[]
     */
    public $args;

    /**
     * @description The image of the container.
     *
     * @example registry-cn-hangzhou-vpc.ack.aliyuncs.com/acs/arms-prometheus-agent:v4.0.0
     *
     * @var string
     */
    public $image;

    /**
     * @description The name of the container.
     *
     * @example arms-prometheus-operator
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'args'  => 'Args',
        'image' => 'Image',
        'name'  => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->args) {
            $res['Args'] = $this->args;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return featureContainers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Args'])) {
            if (!empty($map['Args'])) {
                $model->args = $map['Args'];
            }
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
