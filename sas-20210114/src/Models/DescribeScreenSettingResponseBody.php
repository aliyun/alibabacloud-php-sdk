<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models;

use AlibabaCloud\Tea\Model;

class DescribeScreenSettingResponseBody extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $logoPower;

    /**
     * @example https://img.alicdn.XXXXXXXXXXX.jpg
     *
     * @var string
     */
    public $logoUrl;

    /**
     * @example https://XXX.monitor.XXXXcom
     *
     * @var string
     */
    public $monitorUrl;

    /**
     * @example B9A68671-BD84-55CD-807A-XXXXXXXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @example [{\\"positionId\\":XX,\\"componentId\\":XX,\\"date\\":\\"XXX\\"},{\\"positionId\\":X,\\"componentId\\":X,\\"date\\":\\"XXX\\"},{\\"positionId\\":X,\\"componentId\\":X,\\"date\\":\\"XX\\"},{\\"positionId\\":X,\\"componentId\\":XX,\\"date\\":\\"XXX\\"},{\\"positionId\\":X,\\"componentId\\":XX,\\"date\\":\\"XX\\"},{\\"positionId\\":X,\\"componentId\\":XX,\\"date\\":\\"XX\\"},{\\"positionId\\":X,\\"componentId\\":XX,\\"date\\":\\"XXX\\"},{\\"positionId\\":X,\\"componentId\\":,\\"date\\":\\"XXXX\\"}]
     *
     * @var string
     */
    public $screenDataMap;

    /**
     * @example 7849
     *
     * @var int
     */
    public $screenDefault;

    /**
     * @example 1004770
     *
     * @var int
     */
    public $screenId;

    /**
     * @example Daily Report
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'logoPower' => 'LogoPower',
        'logoUrl' => 'LogoUrl',
        'monitorUrl' => 'MonitorUrl',
        'requestId' => 'RequestId',
        'screenDataMap' => 'ScreenDataMap',
        'screenDefault' => 'ScreenDefault',
        'screenId' => 'ScreenId',
        'title' => 'Title',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->logoPower) {
            $res['LogoPower'] = $this->logoPower;
        }
        if (null !== $this->logoUrl) {
            $res['LogoUrl'] = $this->logoUrl;
        }
        if (null !== $this->monitorUrl) {
            $res['MonitorUrl'] = $this->monitorUrl;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->screenDataMap) {
            $res['ScreenDataMap'] = $this->screenDataMap;
        }
        if (null !== $this->screenDefault) {
            $res['ScreenDefault'] = $this->screenDefault;
        }
        if (null !== $this->screenId) {
            $res['ScreenId'] = $this->screenId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScreenSettingResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogoPower'])) {
            $model->logoPower = $map['LogoPower'];
        }
        if (isset($map['LogoUrl'])) {
            $model->logoUrl = $map['LogoUrl'];
        }
        if (isset($map['MonitorUrl'])) {
            $model->monitorUrl = $map['MonitorUrl'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScreenDataMap'])) {
            $model->screenDataMap = $map['ScreenDataMap'];
        }
        if (isset($map['ScreenDefault'])) {
            $model->screenDefault = $map['ScreenDefault'];
        }
        if (isset($map['ScreenId'])) {
            $model->screenId = $map['ScreenId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
