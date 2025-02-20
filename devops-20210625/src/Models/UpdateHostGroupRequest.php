<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class UpdateHostGroupRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunRegion;
    /**
     * @var string
     */
    public $ecsLabelKey;
    /**
     * @var string
     */
    public $ecsLabelValue;
    /**
     * @var string
     */
    public $ecsType;
    /**
     * @var string
     */
    public $envId;
    /**
     * @var string
     */
    public $machineInfos;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $serviceConnectionId;
    /**
     * @var string
     */
    public $tagIds;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'aliyunRegion'        => 'aliyunRegion',
        'ecsLabelKey'         => 'ecsLabelKey',
        'ecsLabelValue'       => 'ecsLabelValue',
        'ecsType'             => 'ecsType',
        'envId'               => 'envId',
        'machineInfos'        => 'machineInfos',
        'name'                => 'name',
        'serviceConnectionId' => 'serviceConnectionId',
        'tagIds'              => 'tagIds',
        'type'                => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunRegion) {
            $res['aliyunRegion'] = $this->aliyunRegion;
        }

        if (null !== $this->ecsLabelKey) {
            $res['ecsLabelKey'] = $this->ecsLabelKey;
        }

        if (null !== $this->ecsLabelValue) {
            $res['ecsLabelValue'] = $this->ecsLabelValue;
        }

        if (null !== $this->ecsType) {
            $res['ecsType'] = $this->ecsType;
        }

        if (null !== $this->envId) {
            $res['envId'] = $this->envId;
        }

        if (null !== $this->machineInfos) {
            $res['machineInfos'] = $this->machineInfos;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->serviceConnectionId) {
            $res['serviceConnectionId'] = $this->serviceConnectionId;
        }

        if (null !== $this->tagIds) {
            $res['tagIds'] = $this->tagIds;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['aliyunRegion'])) {
            $model->aliyunRegion = $map['aliyunRegion'];
        }

        if (isset($map['ecsLabelKey'])) {
            $model->ecsLabelKey = $map['ecsLabelKey'];
        }

        if (isset($map['ecsLabelValue'])) {
            $model->ecsLabelValue = $map['ecsLabelValue'];
        }

        if (isset($map['ecsType'])) {
            $model->ecsType = $map['ecsType'];
        }

        if (isset($map['envId'])) {
            $model->envId = $map['envId'];
        }

        if (isset($map['machineInfos'])) {
            $model->machineInfos = $map['machineInfos'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['serviceConnectionId'])) {
            $model->serviceConnectionId = $map['serviceConnectionId'];
        }

        if (isset($map['tagIds'])) {
            $model->tagIds = $map['tagIds'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
