<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\Tea\Model;

class SetAllowIPRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $allowIP;

    /**
     * @var bool
     */
    public $append;
    protected $_name = [
        'regionId'    => 'RegionId',
        'networkType' => 'NetworkType',
        'product'     => 'Product',
        'allowIP'     => 'AllowIP',
        'append'      => 'Append',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->allowIP) {
            $res['AllowIP'] = $this->allowIP;
        }
        if (null !== $this->append) {
            $res['Append'] = $this->append;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetAllowIPRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['AllowIP'])) {
            $model->allowIP = $map['AllowIP'];
        }
        if (isset($map['Append'])) {
            $model->append = $map['Append'];
        }

        return $model;
    }
}
