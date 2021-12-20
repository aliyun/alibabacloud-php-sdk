<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIoTCloudConnectorGroupsResponseBody;

use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIoTCloudConnectorGroupsResponseBody\ioTCloudConnectorGroups\ioTCloudConnectors;
use AlibabaCloud\Tea\Model;

class ioTCloudConnectorGroups extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ioTCloudConnectorGroupId;

    /**
     * @var string
     */
    public $ioTCloudConnectorGroupStatus;

    /**
     * @var ioTCloudConnectors[]
     */
    public $ioTCloudConnectors;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'createTime'                   => 'CreateTime',
        'description'                  => 'Description',
        'ioTCloudConnectorGroupId'     => 'IoTCloudConnectorGroupId',
        'ioTCloudConnectorGroupStatus' => 'IoTCloudConnectorGroupStatus',
        'ioTCloudConnectors'           => 'IoTCloudConnectors',
        'name'                         => 'Name',
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
        if (null !== $this->ioTCloudConnectorGroupId) {
            $res['IoTCloudConnectorGroupId'] = $this->ioTCloudConnectorGroupId;
        }
        if (null !== $this->ioTCloudConnectorGroupStatus) {
            $res['IoTCloudConnectorGroupStatus'] = $this->ioTCloudConnectorGroupStatus;
        }
        if (null !== $this->ioTCloudConnectors) {
            $res['IoTCloudConnectors'] = [];
            if (null !== $this->ioTCloudConnectors && \is_array($this->ioTCloudConnectors)) {
                $n = 0;
                foreach ($this->ioTCloudConnectors as $item) {
                    $res['IoTCloudConnectors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ioTCloudConnectorGroups
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
        if (isset($map['IoTCloudConnectorGroupId'])) {
            $model->ioTCloudConnectorGroupId = $map['IoTCloudConnectorGroupId'];
        }
        if (isset($map['IoTCloudConnectorGroupStatus'])) {
            $model->ioTCloudConnectorGroupStatus = $map['IoTCloudConnectorGroupStatus'];
        }
        if (isset($map['IoTCloudConnectors'])) {
            if (!empty($map['IoTCloudConnectors'])) {
                $model->ioTCloudConnectors = [];
                $n                         = 0;
                foreach ($map['IoTCloudConnectors'] as $item) {
                    $model->ioTCloudConnectors[$n++] = null !== $item ? ioTCloudConnectors::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
