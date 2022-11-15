<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class LocationDateCluster extends Model
{
    /**
     * @var Address[]
     */
    public $addresses;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $customId;

    /**
     * @var mixed[]
     */
    public $customLabels;

    /**
     * @var string
     */
    public $locationDateClusterEndTime;

    /**
     * @var string
     */
    public $locationDateClusterLevel;

    /**
     * @var string
     */
    public $locationDateClusterStartTime;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'addresses'                    => 'Addresses',
        'createTime'                   => 'CreateTime',
        'customId'                     => 'CustomId',
        'customLabels'                 => 'CustomLabels',
        'locationDateClusterEndTime'   => 'LocationDateClusterEndTime',
        'locationDateClusterLevel'     => 'LocationDateClusterLevel',
        'locationDateClusterStartTime' => 'LocationDateClusterStartTime',
        'objectId'                     => 'ObjectId',
        'title'                        => 'Title',
        'updateTime'                   => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addresses) {
            $res['Addresses'] = [];
            if (null !== $this->addresses && \is_array($this->addresses)) {
                $n = 0;
                foreach ($this->addresses as $item) {
                    $res['Addresses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->customId) {
            $res['CustomId'] = $this->customId;
        }
        if (null !== $this->customLabels) {
            $res['CustomLabels'] = $this->customLabels;
        }
        if (null !== $this->locationDateClusterEndTime) {
            $res['LocationDateClusterEndTime'] = $this->locationDateClusterEndTime;
        }
        if (null !== $this->locationDateClusterLevel) {
            $res['LocationDateClusterLevel'] = $this->locationDateClusterLevel;
        }
        if (null !== $this->locationDateClusterStartTime) {
            $res['LocationDateClusterStartTime'] = $this->locationDateClusterStartTime;
        }
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LocationDateCluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Addresses'])) {
            if (!empty($map['Addresses'])) {
                $model->addresses = [];
                $n                = 0;
                foreach ($map['Addresses'] as $item) {
                    $model->addresses[$n++] = null !== $item ? Address::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CustomId'])) {
            $model->customId = $map['CustomId'];
        }
        if (isset($map['CustomLabels'])) {
            $model->customLabels = $map['CustomLabels'];
        }
        if (isset($map['LocationDateClusterEndTime'])) {
            $model->locationDateClusterEndTime = $map['LocationDateClusterEndTime'];
        }
        if (isset($map['LocationDateClusterLevel'])) {
            $model->locationDateClusterLevel = $map['LocationDateClusterLevel'];
        }
        if (isset($map['LocationDateClusterStartTime'])) {
            $model->locationDateClusterStartTime = $map['LocationDateClusterStartTime'];
        }
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
