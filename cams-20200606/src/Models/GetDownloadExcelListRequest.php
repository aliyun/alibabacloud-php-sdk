<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;

class GetDownloadExcelListRequest extends Model
{
    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var mixed[]
     */
    public $bizExtend;

    /**
     * @var string
     */
    public $condition;

    /**
     * @var string[]
     */
    public $countryNames;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string[]
     */
    public $groupIds;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $startDate;
    protected $_name = [
        'bizCode' => 'BizCode',
        'bizExtend' => 'BizExtend',
        'condition' => 'Condition',
        'countryNames' => 'CountryNames',
        'endDate' => 'EndDate',
        'groupId' => 'GroupId',
        'groupIds' => 'GroupIds',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'startDate' => 'StartDate',
    ];

    public function validate()
    {
        if (\is_array($this->bizExtend)) {
            Model::validateArray($this->bizExtend);
        }
        if (\is_array($this->countryNames)) {
            Model::validateArray($this->countryNames);
        }
        if (\is_array($this->groupIds)) {
            Model::validateArray($this->groupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }

        if (null !== $this->bizExtend) {
            if (\is_array($this->bizExtend)) {
                $res['BizExtend'] = [];
                foreach ($this->bizExtend as $key1 => $value1) {
                    $res['BizExtend'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }

        if (null !== $this->countryNames) {
            if (\is_array($this->countryNames)) {
                $res['CountryNames'] = [];
                $n1 = 0;
                foreach ($this->countryNames as $item1) {
                    $res['CountryNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupIds) {
            if (\is_array($this->groupIds)) {
                $res['GroupIds'] = [];
                $n1 = 0;
                foreach ($this->groupIds as $item1) {
                    $res['GroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
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
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }

        if (isset($map['BizExtend'])) {
            if (!empty($map['BizExtend'])) {
                $model->bizExtend = [];
                foreach ($map['BizExtend'] as $key1 => $value1) {
                    $model->bizExtend[$key1] = $value1;
                }
            }
        }

        if (isset($map['Condition'])) {
            $model->condition = $map['Condition'];
        }

        if (isset($map['CountryNames'])) {
            if (!empty($map['CountryNames'])) {
                $model->countryNames = [];
                $n1 = 0;
                foreach ($map['CountryNames'] as $item1) {
                    $model->countryNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupIds'])) {
            if (!empty($map['GroupIds'])) {
                $model->groupIds = [];
                $n1 = 0;
                foreach ($map['GroupIds'] as $item1) {
                    $model->groupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
