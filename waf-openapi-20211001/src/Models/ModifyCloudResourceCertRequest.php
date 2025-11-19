<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyCloudResourceCertRequest\certificates;

class ModifyCloudResourceCertRequest extends Model
{
    /**
     * @var certificates[]
     */
    public $certificates;

    /**
     * @var string
     */
    public $cloudResourceId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceInstanceId;

    /**
     * @var string
     */
    public $resourceProduct;
    protected $_name = [
        'certificates' => 'Certificates',
        'cloudResourceId' => 'CloudResourceId',
        'instanceId' => 'InstanceId',
        'port' => 'Port',
        'regionId' => 'RegionId',
        'resourceInstanceId' => 'ResourceInstanceId',
        'resourceProduct' => 'ResourceProduct',
    ];

    public function validate()
    {
        if (\is_array($this->certificates)) {
            Model::validateArray($this->certificates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certificates) {
            if (\is_array($this->certificates)) {
                $res['Certificates'] = [];
                $n1 = 0;
                foreach ($this->certificates as $item1) {
                    $res['Certificates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cloudResourceId) {
            $res['CloudResourceId'] = $this->cloudResourceId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceInstanceId) {
            $res['ResourceInstanceId'] = $this->resourceInstanceId;
        }

        if (null !== $this->resourceProduct) {
            $res['ResourceProduct'] = $this->resourceProduct;
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
        if (isset($map['Certificates'])) {
            if (!empty($map['Certificates'])) {
                $model->certificates = [];
                $n1 = 0;
                foreach ($map['Certificates'] as $item1) {
                    $model->certificates[$n1] = certificates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CloudResourceId'])) {
            $model->cloudResourceId = $map['CloudResourceId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceInstanceId'])) {
            $model->resourceInstanceId = $map['ResourceInstanceId'];
        }

        if (isset($map['ResourceProduct'])) {
            $model->resourceProduct = $map['ResourceProduct'];
        }

        return $model;
    }
}
