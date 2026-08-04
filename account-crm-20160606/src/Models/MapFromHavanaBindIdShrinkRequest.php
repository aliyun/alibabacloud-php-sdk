<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class MapFromHavanaBindIdShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $havanaBindId;

    /**
     * @var string
     */
    public $havanaBindStationsShrink;
    protected $_name = [
        'appName' => 'AppName',
        'havanaBindId' => 'HavanaBindId',
        'havanaBindStationsShrink' => 'HavanaBindStations',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->havanaBindId) {
            $res['HavanaBindId'] = $this->havanaBindId;
        }

        if (null !== $this->havanaBindStationsShrink) {
            $res['HavanaBindStations'] = $this->havanaBindStationsShrink;
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

        if (isset($map['HavanaBindId'])) {
            $model->havanaBindId = $map['HavanaBindId'];
        }

        if (isset($map['HavanaBindStations'])) {
            $model->havanaBindStationsShrink = $map['HavanaBindStations'];
        }

        return $model;
    }
}
