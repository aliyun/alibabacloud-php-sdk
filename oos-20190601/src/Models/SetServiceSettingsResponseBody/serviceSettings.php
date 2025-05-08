<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\SetServiceSettingsResponseBody;

use AlibabaCloud\Dara\Model;

class serviceSettings extends Model
{
    /**
     * @var string
     */
    public $deliveryOssBucketName;

    /**
     * @var bool
     */
    public $deliveryOssEnabled;

    /**
     * @var string
     */
    public $deliveryOssKeyPrefix;

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
        'deliveryOssBucketName' => 'DeliveryOssBucketName',
        'deliveryOssEnabled' => 'DeliveryOssEnabled',
        'deliveryOssKeyPrefix' => 'DeliveryOssKeyPrefix',
        'deliverySlsEnabled' => 'DeliverySlsEnabled',
        'deliverySlsProjectName' => 'DeliverySlsProjectName',
        'rdcEnterpriseId' => 'RdcEnterpriseId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deliveryOssBucketName) {
            $res['DeliveryOssBucketName'] = $this->deliveryOssBucketName;
        }

        if (null !== $this->deliveryOssEnabled) {
            $res['DeliveryOssEnabled'] = $this->deliveryOssEnabled;
        }

        if (null !== $this->deliveryOssKeyPrefix) {
            $res['DeliveryOssKeyPrefix'] = $this->deliveryOssKeyPrefix;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeliveryOssBucketName'])) {
            $model->deliveryOssBucketName = $map['DeliveryOssBucketName'];
        }

        if (isset($map['DeliveryOssEnabled'])) {
            $model->deliveryOssEnabled = $map['DeliveryOssEnabled'];
        }

        if (isset($map['DeliveryOssKeyPrefix'])) {
            $model->deliveryOssKeyPrefix = $map['DeliveryOssKeyPrefix'];
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
