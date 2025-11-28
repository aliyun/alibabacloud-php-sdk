<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models;

use AlibabaCloud\Dara\Model;

class AddBaaSFabricBizChainRequest extends Model
{
    /**
     * @var string
     */
    public $baaSFabricChannelId;

    /**
     * @var string
     */
    public $baaSFabricConsortiumId;

    /**
     * @var string
     */
    public $baaSFabricOrganizationId;

    /**
     * @var string
     */
    public $contractTemplateIdList;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'baaSFabricChannelId' => 'BaaSFabricChannelId',
        'baaSFabricConsortiumId' => 'BaaSFabricConsortiumId',
        'baaSFabricOrganizationId' => 'BaaSFabricOrganizationId',
        'contractTemplateIdList' => 'ContractTemplateIdList',
        'name' => 'Name',
        'regionId' => 'RegionId',
        'remark' => 'Remark',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baaSFabricChannelId) {
            $res['BaaSFabricChannelId'] = $this->baaSFabricChannelId;
        }

        if (null !== $this->baaSFabricConsortiumId) {
            $res['BaaSFabricConsortiumId'] = $this->baaSFabricConsortiumId;
        }

        if (null !== $this->baaSFabricOrganizationId) {
            $res['BaaSFabricOrganizationId'] = $this->baaSFabricOrganizationId;
        }

        if (null !== $this->contractTemplateIdList) {
            $res['ContractTemplateIdList'] = $this->contractTemplateIdList;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
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
        if (isset($map['BaaSFabricChannelId'])) {
            $model->baaSFabricChannelId = $map['BaaSFabricChannelId'];
        }

        if (isset($map['BaaSFabricConsortiumId'])) {
            $model->baaSFabricConsortiumId = $map['BaaSFabricConsortiumId'];
        }

        if (isset($map['BaaSFabricOrganizationId'])) {
            $model->baaSFabricOrganizationId = $map['BaaSFabricOrganizationId'];
        }

        if (isset($map['ContractTemplateIdList'])) {
            $model->contractTemplateIdList = $map['ContractTemplateIdList'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
