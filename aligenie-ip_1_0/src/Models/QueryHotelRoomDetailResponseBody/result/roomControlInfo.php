<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelRoomDetailResponseBody\result;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelRoomDetailResponseBody\result\roomControlInfo\deviceInfos;
use AlibabaCloud\Tea\Model;

class roomControlInfo extends Model
{
    /**
     * @example 78
     *
     * @var int
     */
    public $appId;

    /**
     * @example app
     *
     * @var string
     */
    public $appName;

    /**
     * @var deviceInfos[]
     */
    public $deviceInfos;

    /**
     * @example http://www.xxx.com
     *
     * @var string
     */
    public $rcuUrl;

    /**
     * @example 1170
     *
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'appId'        => 'AppId',
        'appName'      => 'AppName',
        'deviceInfos'  => 'DeviceInfos',
        'rcuUrl'       => 'RcuUrl',
        'templateId'   => 'TemplateId',
        'templateName' => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->deviceInfos) {
            $res['DeviceInfos'] = [];
            if (null !== $this->deviceInfos && \is_array($this->deviceInfos)) {
                $n = 0;
                foreach ($this->deviceInfos as $item) {
                    $res['DeviceInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->rcuUrl) {
            $res['RcuUrl'] = $this->rcuUrl;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roomControlInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['DeviceInfos'])) {
            if (!empty($map['DeviceInfos'])) {
                $model->deviceInfos = [];
                $n                  = 0;
                foreach ($map['DeviceInfos'] as $item) {
                    $model->deviceInfos[$n++] = null !== $item ? deviceInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RcuUrl'])) {
            $model->rcuUrl = $map['RcuUrl'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
