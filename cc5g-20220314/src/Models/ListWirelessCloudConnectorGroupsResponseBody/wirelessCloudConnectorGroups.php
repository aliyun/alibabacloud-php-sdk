<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models\ListWirelessCloudConnectorGroupsResponseBody;

use AlibabaCloud\SDK\CC5G\V20220314\Models\ListWirelessCloudConnectorGroupsResponseBody\wirelessCloudConnectorGroups\wirelessCloudConnectors;
use AlibabaCloud\Tea\Model;

class wirelessCloudConnectorGroups extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $wirelessCloudConnectorGroupId;

    /**
     * @var wirelessCloudConnectors[]
     */
    public $wirelessCloudConnectors;
    protected $_name = [
        'createTime'                    => 'CreateTime',
        'description'                   => 'Description',
        'name'                          => 'Name',
        'regionId'                      => 'RegionId',
        'status'                        => 'Status',
        'wirelessCloudConnectorGroupId' => 'WirelessCloudConnectorGroupId',
        'wirelessCloudConnectors'       => 'WirelessCloudConnectors',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->wirelessCloudConnectorGroupId) {
            $res['WirelessCloudConnectorGroupId'] = $this->wirelessCloudConnectorGroupId;
        }
        if (null !== $this->wirelessCloudConnectors) {
            $res['WirelessCloudConnectors'] = [];
            if (null !== $this->wirelessCloudConnectors && \is_array($this->wirelessCloudConnectors)) {
                $n = 0;
                foreach ($this->wirelessCloudConnectors as $item) {
                    $res['WirelessCloudConnectors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return wirelessCloudConnectorGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WirelessCloudConnectorGroupId'])) {
            $model->wirelessCloudConnectorGroupId = $map['WirelessCloudConnectorGroupId'];
        }
        if (isset($map['WirelessCloudConnectors'])) {
            if (!empty($map['WirelessCloudConnectors'])) {
                $model->wirelessCloudConnectors = [];
                $n                              = 0;
                foreach ($map['WirelessCloudConnectors'] as $item) {
                    $model->wirelessCloudConnectors[$n++] = null !== $item ? wirelessCloudConnectors::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
