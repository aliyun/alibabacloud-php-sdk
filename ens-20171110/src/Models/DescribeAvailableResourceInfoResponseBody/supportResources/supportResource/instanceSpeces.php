<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponseBody\supportResources\supportResource;

use AlibabaCloud\Tea\Model;

class instanceSpeces extends Model
{
    /**
     * @var string[]
     */
    public $instanceSpec;
    protected $_name = [
        'instanceSpec' => 'InstanceSpec',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceSpeces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceSpec'])) {
            if (!empty($map['InstanceSpec'])) {
                $model->instanceSpec = $map['InstanceSpec'];
            }
        }

        return $model;
    }
}
