<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceManagedResourceResponseBody;

use AlibabaCloud\Tea\Model;

class managedResource extends Model
{
    /**
     * @var string[]
     */
    public $destinationRules;

    /**
     * @var string[]
     */
    public $localRateLimiters;

    /**
     * @var string[]
     */
    public $virtualServices;
    protected $_name = [
        'destinationRules'  => 'DestinationRules',
        'localRateLimiters' => 'LocalRateLimiters',
        'virtualServices'   => 'VirtualServices',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationRules) {
            $res['DestinationRules'] = $this->destinationRules;
        }
        if (null !== $this->localRateLimiters) {
            $res['LocalRateLimiters'] = $this->localRateLimiters;
        }
        if (null !== $this->virtualServices) {
            $res['VirtualServices'] = $this->virtualServices;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return managedResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationRules'])) {
            if (!empty($map['DestinationRules'])) {
                $model->destinationRules = $map['DestinationRules'];
            }
        }
        if (isset($map['LocalRateLimiters'])) {
            if (!empty($map['LocalRateLimiters'])) {
                $model->localRateLimiters = $map['LocalRateLimiters'];
            }
        }
        if (isset($map['VirtualServices'])) {
            if (!empty($map['VirtualServices'])) {
                $model->virtualServices = $map['VirtualServices'];
            }
        }

        return $model;
    }
}
