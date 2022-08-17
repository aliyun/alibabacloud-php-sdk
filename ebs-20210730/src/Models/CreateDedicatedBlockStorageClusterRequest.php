<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class CreateDedicatedBlockStorageClusterRequest extends Model
{
    /**
     * @var string
     */
    public $azone;

    /**
     * @var int
     */
    public $capacity;

    /**
     * @var string
     */
    public $dbscId;

    /**
     * @var string
     */
    public $dbscName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'azone'    => 'Azone',
        'capacity' => 'Capacity',
        'dbscId'   => 'DbscId',
        'dbscName' => 'DbscName',
        'regionId' => 'RegionId',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->azone) {
            $res['Azone'] = $this->azone;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->dbscId) {
            $res['DbscId'] = $this->dbscId;
        }
        if (null !== $this->dbscName) {
            $res['DbscName'] = $this->dbscName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDedicatedBlockStorageClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Azone'])) {
            $model->azone = $map['Azone'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['DbscId'])) {
            $model->dbscId = $map['DbscId'];
        }
        if (isset($map['DbscName'])) {
            $model->dbscName = $map['DbscName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
