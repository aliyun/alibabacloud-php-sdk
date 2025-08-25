<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType\networkInfo\bandwidthWeighting;

class networkInfo extends Model
{
    /**
     * @var bandwidthWeighting
     */
    public $bandwidthWeighting;
    protected $_name = [
        'bandwidthWeighting' => 'BandwidthWeighting',
    ];

    public function validate()
    {
        if (null !== $this->bandwidthWeighting) {
            $this->bandwidthWeighting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidthWeighting) {
            $res['BandwidthWeighting'] = null !== $this->bandwidthWeighting ? $this->bandwidthWeighting->toArray($noStream) : $this->bandwidthWeighting;
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
        if (isset($map['BandwidthWeighting'])) {
            $model->bandwidthWeighting = bandwidthWeighting::fromMap($map['BandwidthWeighting']);
        }

        return $model;
    }
}
