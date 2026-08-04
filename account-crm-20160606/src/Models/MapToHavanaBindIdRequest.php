<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class MapToHavanaBindIdRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var mixed[]
     */
    public $havanaBindStations;

    /**
     * @var string
     */
    public $pk;
    protected $_name = [
        'appName' => 'AppName',
        'havanaBindStations' => 'HavanaBindStations',
        'pk' => 'Pk',
    ];

    public function validate()
    {
        if (\is_array($this->havanaBindStations)) {
            Model::validateArray($this->havanaBindStations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->havanaBindStations) {
            if (\is_array($this->havanaBindStations)) {
                $res['HavanaBindStations'] = [];
                foreach ($this->havanaBindStations as $key1 => $value1) {
                    $res['HavanaBindStations'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['HavanaBindStations'])) {
            if (!empty($map['HavanaBindStations'])) {
                $model->havanaBindStations = [];
                foreach ($map['HavanaBindStations'] as $key1 => $value1) {
                    $model->havanaBindStations[$key1] = $value1;
                }
            }
        }

        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        return $model;
    }
}
