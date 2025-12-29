<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelRoomDetailResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelRoomDetailResponseBody\result\roomControlInfo\deviceInfos;

class roomControlInfo extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var deviceInfos[]
     */
    public $deviceInfos;

    /**
     * @var string
     */
    public $rcuUrl;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'deviceInfos' => 'DeviceInfos',
        'rcuUrl' => 'RcuUrl',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
    ];

    public function validate()
    {
        if (\is_array($this->deviceInfos)) {
            Model::validateArray($this->deviceInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->deviceInfos) {
            if (\is_array($this->deviceInfos)) {
                $res['DeviceInfos'] = [];
                $n1 = 0;
                foreach ($this->deviceInfos as $item1) {
                    $res['DeviceInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['DeviceInfos'] as $item1) {
                    $model->deviceInfos[$n1] = deviceInfos::fromMap($item1);
                    ++$n1;
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
