<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListAssistActionDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $timestamp;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $ID;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var int
     */
    public $updatedAt;
    protected $_name = [
        'deviceId'  => 'DeviceId',
        'action'    => 'Action',
        'timestamp' => 'Timestamp',
        'type'      => 'Type',
        'data'      => 'Data',
        'ID'        => 'ID',
        'createdAt' => 'CreatedAt',
        'updatedAt' => 'UpdatedAt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->ID) {
            $res['ID'] = $this->ID;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['ID'])) {
            $model->ID = $map['ID'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        return $model;
    }
}
