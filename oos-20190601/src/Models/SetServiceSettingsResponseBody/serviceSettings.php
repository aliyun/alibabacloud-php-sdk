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
    public $deliveryOssEnabled;

    /**
     * @var bool
     */
    public $deliverySlsEnabled;

    /**
     * @var string
     */
    public $deliverySlsProjectName;

    /**
     * @var string
     */
    public $rdcEnterpriseId;
    protected $_name = [
        'deliveryOssBucketName'  => 'DeliveryOssBucketName',
        'deliveryOssKeyPrefix'   => 'DeliveryOssKeyPrefix',
        'deliveryOssEnabled'     => 'DeliveryOssEnabled',
        'deliverySlsEnabled'     => 'DeliverySlsEnabled',
        'deliverySlsProjectName' => 'DeliverySlsProjectName',
        'rdcEnterpriseId'        => 'RdcEnterpriseId',
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
        if (null !== $this->deliveryOssEnabled) {
            $res['DeliveryOssEnabled'] = $this->deliveryOssEnabled;
        }
        if (null !== $this->deliverySlsEnabled) {
            $res['DeliverySlsEnabled'] = $this->deliverySlsEnabled;
        }
        if (null !== $this->deliverySlsProjectName) {
            $res['DeliverySlsProjectName'] = $this->deliverySlsProjectName;
        }
        if (null !== $this->rdcEnterpriseId) {
            $res['RdcEnterpriseId'] = $this->rdcEnterpriseId;
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
        if (isset($map['DeliveryOssEnabled'])) {
            $model->deliveryOssEnabled = $map['DeliveryOssEnabled'];
        }
        if (isset($map['DeliverySlsEnabled'])) {
            $model->deliverySlsEnabled = $map['DeliverySlsEnabled'];
        }
        if (isset($map['DeliverySlsProjectName'])) {
            $model->deliverySlsProjectName = $map['DeliverySlsProjectName'];
        }
        if (isset($map['RdcEnterpriseId'])) {
            $model->rdcEnterpriseId = $map['RdcEnterpriseId'];
        }

        return $model;
    }
}
