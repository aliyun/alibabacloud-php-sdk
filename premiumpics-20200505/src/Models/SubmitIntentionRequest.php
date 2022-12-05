<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\Tea\Model;

class SubmitIntentionRequest extends Model
{
    /**
     * @var string
     */
    public $area;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $commodityType;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $token;

    /**
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
