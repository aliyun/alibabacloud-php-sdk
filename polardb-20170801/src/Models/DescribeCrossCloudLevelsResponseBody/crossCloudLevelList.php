<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeCrossCloudLevelsResponseBody;

use AlibabaCloud\Dara\Model;

class crossCloudLevelList extends Model
{
    /**
     * @var string
     */
    public $DBType;

    /**
     * @var string
     */
    public $levelCode;

    /**
     * @var string
     */
    public $levelName;
    protected $_name = [
        'DBType' => 'DBType',
        'levelCode' => 'LevelCode',
        'levelName' => 'LevelName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }

        if (null !== $this->levelCode) {
            $res['LevelCode'] = $this->levelCode;
        }

        if (null !== $this->levelName) {
            $res['LevelName'] = $this->levelName;
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
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }

        if (isset($map['LevelCode'])) {
            $model->levelCode = $map['LevelCode'];
        }

        if (isset($map['LevelName'])) {
            $model->levelName = $map['LevelName'];
        }

        return $model;
    }
}
