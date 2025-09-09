<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\SearchRecursionZonesResponseBody\zones;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SearchRecursionZonesResponseBody\zones\zone\effectiveScopes;

class zone extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $creatorSubType;

    /**
     * @var string
     */
    public $creatorType;

    /**
     * @var effectiveScopes
     */
    public $effectiveScopes;

    /**
     * @var string
     */
    public $proxyPattern;

    /**
     * @var int
     */
    public $recordCount;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $updateTimestamp;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'createTime' => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'creator' => 'Creator',
        'creatorSubType' => 'CreatorSubType',
        'creatorType' => 'CreatorType',
        'effectiveScopes' => 'EffectiveScopes',
        'proxyPattern' => 'ProxyPattern',
        'recordCount' => 'RecordCount',
        'remark' => 'Remark',
        'updateTime' => 'UpdateTime',
        'updateTimestamp' => 'UpdateTimestamp',
        'zoneId' => 'ZoneId',
        'zoneName' => 'ZoneName',
    ];

    public function validate()
    {
        if (null !== $this->effectiveScopes) {
            $this->effectiveScopes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->creatorSubType) {
            $res['CreatorSubType'] = $this->creatorSubType;
        }

        if (null !== $this->creatorType) {
            $res['CreatorType'] = $this->creatorType;
        }

        if (null !== $this->effectiveScopes) {
            $res['EffectiveScopes'] = null !== $this->effectiveScopes ? $this->effectiveScopes->toArray($noStream) : $this->effectiveScopes;
        }

        if (null !== $this->proxyPattern) {
            $res['ProxyPattern'] = $this->proxyPattern;
        }

        if (null !== $this->recordCount) {
            $res['RecordCount'] = $this->recordCount;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['CreatorSubType'])) {
            $model->creatorSubType = $map['CreatorSubType'];
        }

        if (isset($map['CreatorType'])) {
            $model->creatorType = $map['CreatorType'];
        }

        if (isset($map['EffectiveScopes'])) {
            $model->effectiveScopes = effectiveScopes::fromMap($map['EffectiveScopes']);
        }

        if (isset($map['ProxyPattern'])) {
            $model->proxyPattern = $map['ProxyPattern'];
        }

        if (isset($map['RecordCount'])) {
            $model->recordCount = $map['RecordCount'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}
