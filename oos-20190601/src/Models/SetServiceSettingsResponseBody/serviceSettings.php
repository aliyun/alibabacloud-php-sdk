<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\SetServiceSettingsResponseBody;

use AlibabaCloud\Tea\Model;

class serviceSettings extends Model
{
    /**
     * @var string
     */
    public $deliveryOssBucketName;

    /**
     * @var string
     */
    public $deliveryOssKeyPrefix;

    /**
     * @var bool
     */
    public $deliverySlsEnabled;

    /**
     * @var bool
     */
    public $deliveryOssEnabled;

    /**
     * @var string
     */
    public $deliverySlsProjectName;
    protected $_name = [
        'deliveryOssBucketName'  => 'DeliveryOssBucketName',
        'deliveryOssKeyPrefix'   => 'DeliveryOssKeyPrefix',
        'deliverySlsEnabled'     => 'DeliverySlsEnabled',
        'deliveryOssEnabled'     => 'DeliveryOssEnabled',
        'deliverySlsProjectName' => 'DeliverySlsProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliveryOssBucketName) {
            $res['DeliveryOssBucketName'] = $this->deliveryOssBucketName;
        }
        if (null !== $this->deliveryOssKeyPrefix) {
            $res['DeliveryOssKeyPrefix'] = $this->deliveryOssKeyPrefix;
        }
        if (null !== $this->deliverySlsEnabled) {
            $res['DeliverySlsEnabled'] = $this->deliverySlsEnabled;
        }
        if (null !== $this->deliveryOssEnabled) {
            $res['DeliveryOssEnabled'] = $this->deliveryOssEnabled;
        }
        if (null !== $this->deliverySlsProjectName) {
            $res['DeliverySlsProjectName'] = $this->deliverySlsProjectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceSettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeliveryOssBucketName'])) {
            $model->deliveryOssBucketName = $map['DeliveryOssBucketName'];
        }
        if (isset($map['DeliveryOssKeyPrefix'])) {
            $model->deliveryOssKeyPrefix = $map['DeliveryOssKeyPrefix'];
        }
        if (isset($map['DeliverySlsEnabled'])) {
            $model->deliverySlsEnabled = $map['DeliverySlsEnabled'];
        }
        if (isset($map['DeliveryOssEnabled'])) {
            $model->deliveryOssEnabled = $map['DeliveryOssEnabled'];
        }
        if (isset($map['DeliverySlsProjectName'])) {
            $model->deliverySlsProjectName = $map['DeliverySlsProjectName'];
        }

        return $model;
    }
}
