<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyDtsJobShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $dbListShrink;

    /**
     * @var string
     */
    public $dtsInstanceId;

    /**
     * @var string
     */
    public $etlOperatorColumnReference;

    /**
     * @description 修改任务的方式，当为UPDATE_RESERVED时为修改reserve字段，不传默认修改dbList
     *
     * @var string
     */
    public $modifyTypeEnum;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description 新增的reserved字段，新增而不是覆盖
     *
     * @var string
     */
    public $reserved;

    /**
     * @var string
     */
    public $synchronizationDirection;
    protected $_name = [
        'clientToken'                => 'ClientToken',
        'dbListShrink'               => 'DbList',
        'dtsInstanceId'              => 'DtsInstanceId',
        'etlOperatorColumnReference' => 'EtlOperatorColumnReference',
        'modifyTypeEnum'             => 'ModifyTypeEnum',
        'regionId'                   => 'RegionId',
        'reserved'                   => 'Reserved',
        'synchronizationDirection'   => 'SynchronizationDirection',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dbListShrink) {
            $res['DbList'] = $this->dbListShrink;
        }
        if (null !== $this->dtsInstanceId) {
            $res['DtsInstanceId'] = $this->dtsInstanceId;
        }
        if (null !== $this->etlOperatorColumnReference) {
            $res['EtlOperatorColumnReference'] = $this->etlOperatorColumnReference;
        }
        if (null !== $this->modifyTypeEnum) {
            $res['ModifyTypeEnum'] = $this->modifyTypeEnum;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->reserved) {
            $res['Reserved'] = $this->reserved;
        }
        if (null !== $this->synchronizationDirection) {
            $res['SynchronizationDirection'] = $this->synchronizationDirection;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDtsJobShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DbList'])) {
            $model->dbListShrink = $map['DbList'];
        }
        if (isset($map['DtsInstanceId'])) {
            $model->dtsInstanceId = $map['DtsInstanceId'];
        }
        if (isset($map['EtlOperatorColumnReference'])) {
            $model->etlOperatorColumnReference = $map['EtlOperatorColumnReference'];
        }
        if (isset($map['ModifyTypeEnum'])) {
            $model->modifyTypeEnum = $map['ModifyTypeEnum'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Reserved'])) {
            $model->reserved = $map['Reserved'];
        }
        if (isset($map['SynchronizationDirection'])) {
            $model->synchronizationDirection = $map['SynchronizationDirection'];
        }

        return $model;
    }
}
