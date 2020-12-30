<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class SetServiceSettingsRequest extends Model
{
    /**
     * @var bool
     */
    public $deliveryOssEnabled;

    /**
     * @var string
     */
    public $deliveryOssBucketName;

    /**
     * @var string
     */
    public $deliveryOssKeyPrefix;

    /**
     * @var string
     */
    public $deliverySlsProjectName;

    /**
     * @var bool
     */
    public $deliverySlsEnabled;
    protected $_name = [
        'deliveryOssEnabled'     => 'DeliveryOssEnabled',
        'deliveryOssBucketName'  => 'DeliveryOssBucketName',
        'deliveryOssKeyPrefix'   => 'DeliveryOssKeyPrefix',
        'deliverySlsProjectName' => 'DeliverySlsProjectName',
        'deliverySlsEnabled'     => 'DeliverySlsEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliveryOssEnabled) {
            $res['DeliveryOssEnabled'] = $this->deliveryOssEnabled;
        }
        if (null !== $this->deliveryOssBucketName) {
            $res['DeliveryOssBucketName'] = $this->deliveryOssBucketName;
        }
        if (null !== $this->deliveryOssKeyPrefix) {
            $res['DeliveryOssKeyPrefix'] = $this->deliveryOssKeyPrefix;
        }
        if (null !== $this->deliverySlsProjectName) {
            $res['DeliverySlsProjectName'] = $this->deliverySlsProjectName;
        }
        if (null !== $this->deliverySlsEnabled) {
            $res['DeliverySlsEnabled'] = $this->deliverySlsEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetServiceSettingsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeliveryOssEnabled'])) {
            $model->deliveryOssEnabled = $map['DeliveryOssEnabled'];
        }
        if (isset($map['DeliveryOssBucketName'])) {
            $model->deliveryOssBucketName = $map['DeliveryOssBucketName'];
        }
        if (isset($map['DeliveryOssKeyPrefix'])) {
            $model->deliveryOssKeyPrefix = $map['DeliveryOssKeyPrefix'];
        }
        if (isset($map['DeliverySlsProjectName'])) {
            $model->deliverySlsProjectName = $map['DeliverySlsProjectName'];
        }
        if (isset($map['DeliverySlsEnabled'])) {
            $model->deliverySlsEnabled = $map['DeliverySlsEnabled'];
        }

        return $model;
    }
}
