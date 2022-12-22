<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\Tea\Model;

class SubmitIntentionRequest extends Model
{
    /**
     * @example DOMESTIC
     *
     * @var string
     */
    public $area;

    /**
     * @description BizType
     *
     * @example esp.logo
     *
     * @var string
     */
    public $bizType;

    /**
     * @example 0
     *
     * @var string
     */
    public $channel;

    /**
     * @example yunMarket
     *
     * @var string
     */
    public $commodityType;

    /**
     * @example arms-alertwebhook-cloud-mpp-k8s-prod-arms-prom-onboar-d2681f22
     *
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $description;

    /**
     * @example {\"downloadType\":\"normalLogo\"}
     *
     * @var string
     */
    public $extInfo;

    /**
     * @example 19182198505
     *
     * @var string
     */
    public $mobile;

    /**
     * @example a5d2d827491a4e3a9b3a5c9009c02e89
     *
     * @var string
     */
    public $token;

    /**
     * @example 025684
     *
     * @var string
     */
    public $vcode;
    protected $_name = [
        'area'          => 'Area',
        'bizType'       => 'BizType',
        'channel'       => 'Channel',
        'commodityType' => 'CommodityType',
        'contactName'   => 'ContactName',
        'description'   => 'Description',
        'extInfo'       => 'ExtInfo',
        'mobile'        => 'Mobile',
        'token'         => 'Token',
        'vcode'         => 'Vcode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->commodityType) {
            $res['CommodityType'] = $this->commodityType;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->vcode) {
            $res['Vcode'] = $this->vcode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitIntentionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['CommodityType'])) {
            $model->commodityType = $map['CommodityType'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['Vcode'])) {
            $model->vcode = $map['Vcode'];
        }

        return $model;
    }
}
