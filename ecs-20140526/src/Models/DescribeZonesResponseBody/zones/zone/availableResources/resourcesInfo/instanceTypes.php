<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableResources\resourcesInfo;

use AlibabaCloud\Tea\Model;

class instanceTypes extends Model
{
    /**
     * @var string[]
     */
    public $supportedInstanceType;
    protected $_name = [
        'supportedInstanceType' => 'supportedInstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedInstanceType) {
            $res['supportedInstanceType'] = $this->supportedInstanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['supportedInstanceType'])) {
            if (!empty($map['supportedInstanceType'])) {
                $model->supportedInstanceType = $map['supportedInstanceType'];
            }
        }

        return $model;
    }
}
