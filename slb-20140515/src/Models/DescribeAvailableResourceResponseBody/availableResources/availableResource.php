<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAvailableResourceResponseBody\availableResources;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAvailableResourceResponseBody\availableResources\availableResource\supportResources;
use AlibabaCloud\Tea\Model;

class availableResource extends Model
{
    /**
     * @var string
     */
    public $slaveZoneId;

    /**
     * @var supportResources
     */
    public $supportResources;

    /**
     * @var string
     */
    public $masterZoneId;
    protected $_name = [
        'slaveZoneId'      => 'SlaveZoneId',
        'supportResources' => 'SupportResources',
        'masterZoneId'     => 'MasterZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->slaveZoneId) {
            $res['SlaveZoneId'] = $this->slaveZoneId;
        }
        if (null !== $this->supportResources) {
            $res['SupportResources'] = null !== $this->supportResources ? $this->supportResources->toMap() : null;
        }
        if (null !== $this->masterZoneId) {
            $res['MasterZoneId'] = $this->masterZoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SlaveZoneId'])) {
            $model->slaveZoneId = $map['SlaveZoneId'];
        }
        if (isset($map['SupportResources'])) {
            $model->supportResources = supportResources::fromMap($map['SupportResources']);
        }
        if (isset($map['MasterZoneId'])) {
            $model->masterZoneId = $map['MasterZoneId'];
        }

        return $model;
    }
}
