<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\UpdateUserInformationRequest;

use AlibabaCloud\Dara\Model;

class deliverySettings extends Model
{
    /**
     * @var bool
     */
    public $actiontrailDeliveryToOssEnabled;
    /**
     * @var string
     */
    public $ossBucketName;
    /**
     * @var bool
     */
    public $ossEnabled;
    /**
     * @var int
     */
    public $ossExpirationDays;
    /**
     * @var string
     */
    public $ossPath;
    protected $_name = [
        'actiontrailDeliveryToOssEnabled' => 'ActiontrailDeliveryToOssEnabled',
        'ossBucketName'                   => 'OssBucketName',
        'ossEnabled'                      => 'OssEnabled',
        'ossExpirationDays'               => 'OssExpirationDays',
        'ossPath'                         => 'OssPath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actiontrailDeliveryToOssEnabled) {
            $res['ActiontrailDeliveryToOssEnabled'] = $this->actiontrailDeliveryToOssEnabled;
        }

        if (null !== $this->ossBucketName) {
            $res['OssBucketName'] = $this->ossBucketName;
        }

        if (null !== $this->ossEnabled) {
            $res['OssEnabled'] = $this->ossEnabled;
        }

        if (null !== $this->ossExpirationDays) {
            $res['OssExpirationDays'] = $this->ossExpirationDays;
        }

        if (null !== $this->ossPath) {
            $res['OssPath'] = $this->ossPath;
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
        if (isset($map['ActiontrailDeliveryToOssEnabled'])) {
            $model->actiontrailDeliveryToOssEnabled = $map['ActiontrailDeliveryToOssEnabled'];
        }

        if (isset($map['OssBucketName'])) {
            $model->ossBucketName = $map['OssBucketName'];
        }

        if (isset($map['OssEnabled'])) {
            $model->ossEnabled = $map['OssEnabled'];
        }

        if (isset($map['OssExpirationDays'])) {
            $model->ossExpirationDays = $map['OssExpirationDays'];
        }

        if (isset($map['OssPath'])) {
            $model->ossPath = $map['OssPath'];
        }

        return $model;
    }
}
