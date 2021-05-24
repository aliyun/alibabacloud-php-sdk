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
     * @var string
     */
    public $masterZoneId;

    /**
     * @var supportResources
     */
    public $supportResources;
    protected $_name = [
        'slaveZoneId'      => 'SlaveZoneId',
        'masterZoneId'     => 'MasterZoneId',
        'supportResources' => 'SupportResources',
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
        if (null !== $this->masterZoneId) {
            $res['MasterZoneId'] = $this->masterZoneId;
        }
        if (null !== $this->supportResources) {
            $res['SupportResources'] = null !== $this->supportResources ? $this->supportResources->toMap() : null;
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
        if (isset($map['MasterZoneId'])) {
            $model->masterZoneId = $map['MasterZoneId'];
        }
        if (isset($map['SupportResources'])) {
            $model->supportResources = supportResources::fromMap($map['SupportResources']);
        }

        return $model;
    }
}
