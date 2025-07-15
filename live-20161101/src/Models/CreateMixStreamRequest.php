<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateMixStreamRequest extends Model
{
    /**
     * @description The callback URL. The value is a JSON array. If a callback event is triggered, ApsaraVideo Live sends an HTTP POST request to the URL. The content is included in the HTTP request body.
     *
     * @example {"CallbackUrl":"http://aliyundoc.com"}
     *
     * @var string
     */
    public $callbackConfig;

    /**
     * @description The main streaming domain.
     *
     * >  Only domain names that reside in the China (Shanghai) and China (Beijing) regions are supported.
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The input streams. The value is a JSON array.
     *
     * For more information, see **InputStreamConfig**.
     *
     * This parameter is required.
     *
     * @example [{"LayoutChildId":1,"ResourceType":"live","ResourceValue":"rtmp://example.net/live/f2139ec2b8d6a191068cd****ea9064d?auth_key=1600947017-0-0-0b5645fe35d21a65ab92b394bd4d****","LayoutConfig":{"FillMode":"fit","PositionRefer":"topLeft","FillPositionNormalized":[0,0],"FillSizeNormalized":[1,1]}}]
     *
     * @var string
     */
    public $inputStreamList;

    /**
     * @description The ID of the layout. Valid values:
     *
     *   **MixStreamLayout-1-1**
     *   **MixStreamLayout-2-1**
     *   **MixStreamLayout-2-2**
     *   **MixStreamLayout-2-3**
     *   **MixStreamLayout-3-1**
     *   **MixStreamLayout-3-2**
     *   **MixStreamLayout-4-1**
     *   **USERDEFINED**: If you do not use a preset layout, set this parameter to **USERDEFINED**.
     *
     * >  For more information, see [Preset layouts for stream mixing](https://help.aliyun.com/document_detail/199361.html).
     *
     * This parameter is required.
     *
     * @example MixStreamLayout-1-1
     *
     * @var string
     */
    public $layoutId;

    /**
     * @description The configuration of the output stream. The value is a JSON string.
     *
     * For more information, see **OutputConfig**.
     *
     * This parameter is required.
     *
     * @example {"AppName":"liveApp****","StreamName":"9a78fb3f5c508be0122746f677a3****","MixStreamTemplate":"lp_hd_v","ExpireDuration":"86400"}
     *
     * @var string
     */
    public $outputConfig;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'callbackConfig' => 'CallbackConfig',
        'domainName' => 'DomainName',
        'inputStreamList' => 'InputStreamList',
        'layoutId' => 'LayoutId',
        'outputConfig' => 'OutputConfig',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->callbackConfig) {
            $res['CallbackConfig'] = $this->callbackConfig;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->inputStreamList) {
            $res['InputStreamList'] = $this->inputStreamList;
        }
        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }
        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = $this->outputConfig;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMixStreamRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallbackConfig'])) {
            $model->callbackConfig = $map['CallbackConfig'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['InputStreamList'])) {
            $model->inputStreamList = $map['InputStreamList'];
        }
        if (isset($map['LayoutId'])) {
            $model->layoutId = $map['LayoutId'];
        }
        if (isset($map['OutputConfig'])) {
            $model->outputConfig = $map['OutputConfig'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
