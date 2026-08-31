<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;

class QueryColumnarLogRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var int
     */
    public $maxResultRows;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $SQL;
    protected $_name = [
        'DBInstanceName' => 'DBInstanceName',
        'maxResultRows' => 'MaxResultRows',
        'regionId' => 'RegionId',
        'SQL' => 'SQL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->maxResultRows) {
            $res['MaxResultRows'] = $this->maxResultRows;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->SQL) {
            $res['SQL'] = $this->SQL;
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
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['MaxResultRows'])) {
            $model->maxResultRows = $map['MaxResultRows'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SQL'])) {
            $model->SQL = $map['SQL'];
        }

        return $model;
    }
}
