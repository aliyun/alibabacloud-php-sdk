<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class DescribeSafStartStepsRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var bool
     */
    public $aliyunServer;

    /**
     * @var string
     */
    public $deviceTypesStr;

    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $serverRegion;
    protected $_name = [
        'lang'           => 'Lang',
        'aliyunServer'   => 'aliyunServer',
        'deviceTypesStr' => 'deviceTypesStr',
        'eventCode'      => 'eventCode',
        'language'       => 'language',
        'regId'          => 'regId',
        'serverRegion'   => 'serverRegion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->aliyunServer) {
            $res['aliyunServer'] = $this->aliyunServer;
        }
        if (null !== $this->deviceTypesStr) {
            $res['deviceTypesStr'] = $this->deviceTypesStr;
        }
        if (null !== $this->eventCode) {
            $res['eventCode'] = $this->eventCode;
        }
        if (null !== $this->language) {
            $res['language'] = $this->language;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->serverRegion) {
            $res['serverRegion'] = $this->serverRegion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSafStartStepsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['aliyunServer'])) {
            $model->aliyunServer = $map['aliyunServer'];
        }
        if (isset($map['deviceTypesStr'])) {
            $model->deviceTypesStr = $map['deviceTypesStr'];
        }
        if (isset($map['eventCode'])) {
            $model->eventCode = $map['eventCode'];
        }
        if (isset($map['language'])) {
            $model->language = $map['language'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['serverRegion'])) {
            $model->serverRegion = $map['serverRegion'];
        }

        return $model;
    }
}
