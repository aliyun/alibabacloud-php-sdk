<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class UpdateEnvironmentRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunLang;
    /**
     * @var string
     */
    public $environmentId;
    /**
     * @var string
     */
    public $environmentName;
    /**
     * @var string
     */
    public $feePackage;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'aliyunLang'      => 'AliyunLang',
        'environmentId'   => 'EnvironmentId',
        'environmentName' => 'EnvironmentName',
        'feePackage'      => 'FeePackage',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunLang) {
            $res['AliyunLang'] = $this->aliyunLang;
        }

        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }

        if (null !== $this->environmentName) {
            $res['EnvironmentName'] = $this->environmentName;
        }

        if (null !== $this->feePackage) {
            $res['FeePackage'] = $this->feePackage;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AliyunLang'])) {
            $model->aliyunLang = $map['AliyunLang'];
        }

        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }

        if (isset($map['EnvironmentName'])) {
            $model->environmentName = $map['EnvironmentName'];
        }

        if (isset($map['FeePackage'])) {
            $model->feePackage = $map['FeePackage'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
