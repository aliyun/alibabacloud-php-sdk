<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListLegacyAppraiseLogsResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 3786929579
     *
     * @var string
     */
    public $acid;

    /**
     * @example Outbound
     *
     * @var string
     */
    public $contactType;

    /**
     * @example 10505
     *
     * @var int
     */
    public $id;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example {}
     *
     * @var string
     */
    public $keyMarkRelation;

    /**
     * @var string
     */
    public $note;

    /**
     * @var string
     */
    public $parentNote;

    /**
     * @example 2
     *
     * @var string
     */
    public $pressKey;

    /**
     * @example 28036411123456****
     *
     * @var string
     */
    public $ramId;

    /**
     * @example test@ccc-test
     *
     * @var string
     */
    public $skillGroupId;

    /**
     * @example 2021-12-03T10:15:30
     *
     * @var string
     */
    public $statisticDate;

    /**
     * @example Launch
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'acid'            => 'Acid',
        'contactType'     => 'ContactType',
        'id'              => 'Id',
        'instanceId'      => 'InstanceId',
        'keyMarkRelation' => 'KeyMarkRelation',
        'note'            => 'Note',
        'parentNote'      => 'ParentNote',
        'pressKey'        => 'PressKey',
        'ramId'           => 'RamId',
        'skillGroupId'    => 'SkillGroupId',
        'statisticDate'   => 'StatisticDate',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acid) {
            $res['Acid'] = $this->acid;
        }
        if (null !== $this->contactType) {
            $res['ContactType'] = $this->contactType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->keyMarkRelation) {
            $res['KeyMarkRelation'] = $this->keyMarkRelation;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->parentNote) {
            $res['ParentNote'] = $this->parentNote;
        }
        if (null !== $this->pressKey) {
            $res['PressKey'] = $this->pressKey;
        }
        if (null !== $this->ramId) {
            $res['RamId'] = $this->ramId;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->statisticDate) {
            $res['StatisticDate'] = $this->statisticDate;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Acid'])) {
            $model->acid = $map['Acid'];
        }
        if (isset($map['ContactType'])) {
            $model->contactType = $map['ContactType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['KeyMarkRelation'])) {
            $model->keyMarkRelation = $map['KeyMarkRelation'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['ParentNote'])) {
            $model->parentNote = $map['ParentNote'];
        }
        if (isset($map['PressKey'])) {
            $model->pressKey = $map['PressKey'];
        }
        if (isset($map['RamId'])) {
            $model->ramId = $map['RamId'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['StatisticDate'])) {
            $model->statisticDate = $map['StatisticDate'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
