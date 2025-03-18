<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models;

use AlibabaCloud\Tea\Model;

class CreateScreenSettingRequest extends Model
{
    /**
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @description This parameter is required.
     *
     * @example false
     *
     * @var bool
     */
    public $logoPower;

    /**
     * @description This parameter is required.
     *
     * @example https://img.alicdn.com/tfs/xxxx.png
     *
     * @var string
     */
    public $logoUrl;

    /**
     * @example https://monitor.xxxxxxx
     *
     * @var string
     */
    public $monitorUrl;

    /**
     * @description This parameter is required.
     *
     * @example [{"positionId":1,"componentId":3,"date":"7-day"},{"positionId":2,"componentId":1,"date":"0-second"},{"positionId":3,"componentId":8,"date":"15-day"},{"positionId":4,"componentId":11,"date":"15-day"},{"positionId":5,"componentId":23,"date":"24-hour"},{"positionId":6,"componentId":17,"date":"24-hour"},{"positionId":7,"componentId":13,"date":"24-hour"},{"positionId":8,"componentId":25,"date":"0-second"}]
     *
     * @var string
     */
    public $screenDataMap;

    /**
     * @example 0
     *
     * @var int
     */
    public $screenDefault;

    /**
     * @description This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'id' => 'Id',
        'logoPower' => 'LogoPower',
        'logoUrl' => 'LogoUrl',
        'monitorUrl' => 'MonitorUrl',
        'screenDataMap' => 'ScreenDataMap',
        'screenDefault' => 'ScreenDefault',
        'title' => 'Title',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->logoPower) {
            $res['LogoPower'] = $this->logoPower;
        }
        if (null !== $this->logoUrl) {
            $res['LogoUrl'] = $this->logoUrl;
        }
        if (null !== $this->monitorUrl) {
            $res['MonitorUrl'] = $this->monitorUrl;
        }
        if (null !== $this->screenDataMap) {
            $res['ScreenDataMap'] = $this->screenDataMap;
        }
        if (null !== $this->screenDefault) {
            $res['ScreenDefault'] = $this->screenDefault;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateScreenSettingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LogoPower'])) {
            $model->logoPower = $map['LogoPower'];
        }
        if (isset($map['LogoUrl'])) {
            $model->logoUrl = $map['LogoUrl'];
        }
        if (isset($map['MonitorUrl'])) {
            $model->monitorUrl = $map['MonitorUrl'];
        }
        if (isset($map['ScreenDataMap'])) {
            $model->screenDataMap = $map['ScreenDataMap'];
        }
        if (isset($map['ScreenDefault'])) {
            $model->screenDefault = $map['ScreenDefault'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
