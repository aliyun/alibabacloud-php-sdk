<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAvailableResourceResponseBody;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAvailableResourceResponseBody\availableResources\supportResources;
use AlibabaCloud\Tea\Model;

class availableResources extends Model
{
    /**
     * @var string
     */
    public $slaveZoneId;

    /**
     * @var supportResources[]
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
            $res['SupportResources'] = [];
            if (null !== $this->supportResources && \is_array($this->supportResources)) {
                $n = 0;
                foreach ($this->supportResources as $item) {
                    $res['SupportResources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->masterZoneId) {
            $res['MasterZoneId'] = $this->masterZoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SlaveZoneId'])) {
            $model->slaveZoneId = $map['SlaveZoneId'];
        }
        if (isset($map['SupportResources'])) {
            if (!empty($map['SupportResources'])) {
                $model->supportResources = [];
                $n                       = 0;
                foreach ($map['SupportResources'] as $item) {
                    $model->supportResources[$n++] = null !== $item ? supportResources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MasterZoneId'])) {
            $model->masterZoneId = $map['MasterZoneId'];
        }

        return $model;
    }
}
