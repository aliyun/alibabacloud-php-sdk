<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class relationalData extends Model
{
    /**
     * @var string
     */
    public $serviceStatus;
    protected $_name = [
        'serviceStatus' => 'ServiceStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relationalData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }

        return $model;
    }
}
