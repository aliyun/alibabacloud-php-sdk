<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class DeleteApsDatasoureRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var int
     */
    public $datasourceId;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBClusterId'  => 'DBClusterId',
        'datasourceId' => 'DatasourceId',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->datasourceId) {
            $res['DatasourceId'] = $this->datasourceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DatasourceId'])) {
            $model->datasourceId = $map['DatasourceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
