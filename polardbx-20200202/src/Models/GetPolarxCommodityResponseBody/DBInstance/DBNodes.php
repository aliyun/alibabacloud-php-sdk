<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\GetPolarxCommodityResponseBody\DBInstance;

use AlibabaCloud\Tea\Model;

class DBNodes extends Model
{
    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $nodeClass;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'zoneId'    => 'ZoneId',
        'nodeClass' => 'NodeClass',
        'id'        => 'Id',
        'regionId'  => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->nodeClass) {
            $res['NodeClass'] = $this->nodeClass;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['NodeClass'])) {
            $model->nodeClass = $map['NodeClass'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
