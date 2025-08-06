<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetUnactivatedLicenseOrderResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetUnactivatedLicenseOrderResponseBody\data\licenseConfigs;

class data extends Model
{
    /**
     * @var string
     */
    public $beginOn;

    /**
     * @var string
     */
    public $contractNo;

    /**
     * @var string
     */
    public $expiredOn;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var licenseConfigs[]
     */
    public $licenseConfigs;

    /**
     * @var string
     */
    public $orderType;
    protected $_name = [
        'beginOn' => 'BeginOn',
        'contractNo' => 'ContractNo',
        'expiredOn' => 'ExpiredOn',
        'instanceId' => 'InstanceId',
        'licenseConfigs' => 'LicenseConfigs',
        'orderType' => 'OrderType',
    ];

    public function validate()
    {
        if (\is_array($this->licenseConfigs)) {
            Model::validateArray($this->licenseConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beginOn) {
            $res['BeginOn'] = $this->beginOn;
        }

        if (null !== $this->contractNo) {
            $res['ContractNo'] = $this->contractNo;
        }

        if (null !== $this->expiredOn) {
            $res['ExpiredOn'] = $this->expiredOn;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->licenseConfigs) {
            if (\is_array($this->licenseConfigs)) {
                $res['LicenseConfigs'] = [];
                $n1 = 0;
                foreach ($this->licenseConfigs as $item1) {
                    $res['LicenseConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
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
        if (isset($map['BeginOn'])) {
            $model->beginOn = $map['BeginOn'];
        }

        if (isset($map['ContractNo'])) {
            $model->contractNo = $map['ContractNo'];
        }

        if (isset($map['ExpiredOn'])) {
            $model->expiredOn = $map['ExpiredOn'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LicenseConfigs'])) {
            if (!empty($map['LicenseConfigs'])) {
                $model->licenseConfigs = [];
                $n1 = 0;
                foreach ($map['LicenseConfigs'] as $item1) {
                    $model->licenseConfigs[$n1] = licenseConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        return $model;
    }
}
