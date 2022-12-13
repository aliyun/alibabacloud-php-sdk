<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListSubscriptionServiceGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $serviceGroupDescription;

    /**
     * @example 123113
     *
     * @var int
     */
    public $serviceId;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'serviceGroupDescription' => 'serviceGroupDescription',
        'serviceId'               => 'serviceId',
        'serviceName'             => 'serviceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceGroupDescription) {
            $res['serviceGroupDescription'] = $this->serviceGroupDescription;
        }
        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['serviceGroupDescription'])) {
            $model->serviceGroupDescription = $map['serviceGroupDescription'];
        }
        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        return $model;
    }
}
