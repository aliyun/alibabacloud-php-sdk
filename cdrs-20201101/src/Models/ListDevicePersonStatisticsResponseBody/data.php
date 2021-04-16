<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\ListDevicePersonStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $shotTime;
    protected $_name = [
        'dataSourceId' => 'DataSourceId',
        'number'       => 'Number',
        'shotTime'     => 'ShotTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->shotTime) {
            $res['ShotTime'] = $this->shotTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['ShotTime'])) {
            $model->shotTime = $map['ShotTime'];
        }

        return $model;
    }
}
