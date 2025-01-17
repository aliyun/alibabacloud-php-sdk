<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\LicenseInstanceAppDTO\licenseConfigs;

class LicenseInstanceAppDTO extends Model
{
    /**
     * @var string
     */
    public $appId;
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
    public $creationTime;
    /**
     * @var string
     */
    public $expiredOn;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $itemId;
    /**
     * @var licenseConfigs[]
     */
    public $licenseConfigs;
    /**
     * @var string
     */
    public $modificationTime;
    /**
     * @var string
     */
    public $status;
    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'appId'            => 'AppId',
        'beginOn'          => 'BeginOn',
        'contractNo'       => 'ContractNo',
        'creationTime'     => 'CreationTime',
        'expiredOn'        => 'ExpiredOn',
        'instanceId'       => 'InstanceId',
        'itemId'           => 'ItemId',
        'licenseConfigs'   => 'LicenseConfigs',
        'modificationTime' => 'ModificationTime',
        'status'           => 'Status',
        'userId'           => 'UserId',
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
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->beginOn) {
            $res['BeginOn'] = $this->beginOn;
        }

        if (null !== $this->contractNo) {
            $res['ContractNo'] = $this->contractNo;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->expiredOn) {
            $res['ExpiredOn'] = $this->expiredOn;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }

        if (null !== $this->licenseConfigs) {
            if (\is_array($this->licenseConfigs)) {
                $res['LicenseConfigs'] = [];
                $n1                    = 0;
                foreach ($this->licenseConfigs as $item1) {
                    $res['LicenseConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['BeginOn'])) {
            $model->beginOn = $map['BeginOn'];
        }

        if (isset($map['ContractNo'])) {
            $model->contractNo = $map['ContractNo'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['ExpiredOn'])) {
            $model->expiredOn = $map['ExpiredOn'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }

        if (isset($map['LicenseConfigs'])) {
            if (!empty($map['LicenseConfigs'])) {
                $model->licenseConfigs = [];
                $n1                    = 0;
                foreach ($map['LicenseConfigs'] as $item1) {
                    $model->licenseConfigs[$n1++] = licenseConfigs::fromMap($item1);
                }
            }
        }

        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
