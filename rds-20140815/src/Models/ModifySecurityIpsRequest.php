<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifySecurityIpsRequest\groupItems;

class ModifySecurityIpsRequest extends Model
{
    /**
     * @var bool
     */
    public $batchMode;

    /**
     * @var string
     */
    public $DBInstanceIPArrayAttribute;

    /**
     * @var string
     */
    public $DBInstanceIPArrayName;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $freshWhiteListReadins;

    /**
     * @var groupItems[]
     */
    public $groupItems;

    /**
     * @var string
     */
    public $modifyMode;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $securityIPType;

    /**
     * @var string
     */
    public $securityIps;

    /**
     * @var string
     */
    public $whitelistNetworkType;
    protected $_name = [
        'batchMode' => 'BatchMode',
        'DBInstanceIPArrayAttribute' => 'DBInstanceIPArrayAttribute',
        'DBInstanceIPArrayName' => 'DBInstanceIPArrayName',
        'DBInstanceId' => 'DBInstanceId',
        'freshWhiteListReadins' => 'FreshWhiteListReadins',
        'groupItems' => 'GroupItems',
        'modifyMode' => 'ModifyMode',
        'resourceOwnerId' => 'ResourceOwnerId',
        'securityIPType' => 'SecurityIPType',
        'securityIps' => 'SecurityIps',
        'whitelistNetworkType' => 'WhitelistNetworkType',
    ];

    public function validate()
    {
        if (\is_array($this->groupItems)) {
            Model::validateArray($this->groupItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchMode) {
            $res['BatchMode'] = $this->batchMode;
        }

        if (null !== $this->DBInstanceIPArrayAttribute) {
            $res['DBInstanceIPArrayAttribute'] = $this->DBInstanceIPArrayAttribute;
        }

        if (null !== $this->DBInstanceIPArrayName) {
            $res['DBInstanceIPArrayName'] = $this->DBInstanceIPArrayName;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->freshWhiteListReadins) {
            $res['FreshWhiteListReadins'] = $this->freshWhiteListReadins;
        }

        if (null !== $this->groupItems) {
            if (\is_array($this->groupItems)) {
                $res['GroupItems'] = [];
                $n1 = 0;
                foreach ($this->groupItems as $item1) {
                    $res['GroupItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modifyMode) {
            $res['ModifyMode'] = $this->modifyMode;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->securityIPType) {
            $res['SecurityIPType'] = $this->securityIPType;
        }

        if (null !== $this->securityIps) {
            $res['SecurityIps'] = $this->securityIps;
        }

        if (null !== $this->whitelistNetworkType) {
            $res['WhitelistNetworkType'] = $this->whitelistNetworkType;
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
        if (isset($map['BatchMode'])) {
            $model->batchMode = $map['BatchMode'];
        }

        if (isset($map['DBInstanceIPArrayAttribute'])) {
            $model->DBInstanceIPArrayAttribute = $map['DBInstanceIPArrayAttribute'];
        }

        if (isset($map['DBInstanceIPArrayName'])) {
            $model->DBInstanceIPArrayName = $map['DBInstanceIPArrayName'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['FreshWhiteListReadins'])) {
            $model->freshWhiteListReadins = $map['FreshWhiteListReadins'];
        }

        if (isset($map['GroupItems'])) {
            if (!empty($map['GroupItems'])) {
                $model->groupItems = [];
                $n1 = 0;
                foreach ($map['GroupItems'] as $item1) {
                    $model->groupItems[$n1] = groupItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ModifyMode'])) {
            $model->modifyMode = $map['ModifyMode'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SecurityIPType'])) {
            $model->securityIPType = $map['SecurityIPType'];
        }

        if (isset($map['SecurityIps'])) {
            $model->securityIps = $map['SecurityIps'];
        }

        if (isset($map['WhitelistNetworkType'])) {
            $model->whitelistNetworkType = $map['WhitelistNetworkType'];
        }

        return $model;
    }
}
