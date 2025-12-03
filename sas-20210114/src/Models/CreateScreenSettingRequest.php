<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models;

use AlibabaCloud\Dara\Model;

class CreateScreenSettingRequest extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $logoPower;

    /**
     * @var string
     */
    public $logoUrl;

    /**
     * @var string
     */
    public $monitorUrl;

    /**
     * @var string
     */
    public $screenDataMap;

    /**
     * @var int
     */
    public $screenDefault;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
