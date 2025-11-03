<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;

class RouteItem extends Model
{
    /**
     * @var string
     */
    public $endpointType;

    /**
     * @var string
     */
    public $instanceDomain;

    /**
     * @var string
     */
    public $storageDomain;
    protected $_name = [
        'endpointType' => 'EndpointType',
        'instanceDomain' => 'InstanceDomain',
        'storageDomain' => 'StorageDomain',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }

        if (null !== $this->instanceDomain) {
            $res['InstanceDomain'] = $this->instanceDomain;
        }

        if (null !== $this->storageDomain) {
            $res['StorageDomain'] = $this->storageDomain;
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
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }

        if (isset($map['InstanceDomain'])) {
            $model->instanceDomain = $map['InstanceDomain'];
        }

        if (isset($map['StorageDomain'])) {
            $model->storageDomain = $map['StorageDomain'];
        }

        return $model;
    }
}
