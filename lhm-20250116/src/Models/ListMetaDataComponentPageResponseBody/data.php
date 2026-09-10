<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\ListMetaDataComponentPageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\LHM\V20250116\Models\ListMetaDataComponentPageResponseBody\data\profilingJob;

class data extends Model
{
    /**
     * @var int
     */
    public $componentType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $dsConfig;

    /**
     * @var string
     */
    public $dsDesc;

    /**
     * @var string
     */
    public $dsId;

    /**
     * @var string
     */
    public $dsName;

    /**
     * @var int
     */
    public $dsStatus;

    /**
     * @var string
     */
    public $dsType;

    /**
     * @var string
     */
    public $dsVersion;

    /**
     * @var bool
     */
    public $expired;

    /**
     * @var int
     */
    public $id;

    /**
     * @var profilingJob
     */
    public $profilingJob;
    protected $_name = [
        'componentType' => 'componentType',
        'createTime' => 'createTime',
        'dsConfig' => 'dsConfig',
        'dsDesc' => 'dsDesc',
        'dsId' => 'dsId',
        'dsName' => 'dsName',
        'dsStatus' => 'dsStatus',
        'dsType' => 'dsType',
        'dsVersion' => 'dsVersion',
        'expired' => 'expired',
        'id' => 'id',
        'profilingJob' => 'profilingJob',
    ];

    public function validate()
    {
        if (null !== $this->profilingJob) {
            $this->profilingJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentType) {
            $res['componentType'] = $this->componentType;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->dsConfig) {
            $res['dsConfig'] = $this->dsConfig;
        }

        if (null !== $this->dsDesc) {
            $res['dsDesc'] = $this->dsDesc;
        }

        if (null !== $this->dsId) {
            $res['dsId'] = $this->dsId;
        }

        if (null !== $this->dsName) {
            $res['dsName'] = $this->dsName;
        }

        if (null !== $this->dsStatus) {
            $res['dsStatus'] = $this->dsStatus;
        }

        if (null !== $this->dsType) {
            $res['dsType'] = $this->dsType;
        }

        if (null !== $this->dsVersion) {
            $res['dsVersion'] = $this->dsVersion;
        }

        if (null !== $this->expired) {
            $res['expired'] = $this->expired;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->profilingJob) {
            $res['profilingJob'] = null !== $this->profilingJob ? $this->profilingJob->toArray($noStream) : $this->profilingJob;
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
        if (isset($map['componentType'])) {
            $model->componentType = $map['componentType'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['dsConfig'])) {
            $model->dsConfig = $map['dsConfig'];
        }

        if (isset($map['dsDesc'])) {
            $model->dsDesc = $map['dsDesc'];
        }

        if (isset($map['dsId'])) {
            $model->dsId = $map['dsId'];
        }

        if (isset($map['dsName'])) {
            $model->dsName = $map['dsName'];
        }

        if (isset($map['dsStatus'])) {
            $model->dsStatus = $map['dsStatus'];
        }

        if (isset($map['dsType'])) {
            $model->dsType = $map['dsType'];
        }

        if (isset($map['dsVersion'])) {
            $model->dsVersion = $map['dsVersion'];
        }

        if (isset($map['expired'])) {
            $model->expired = $map['expired'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['profilingJob'])) {
            $model->profilingJob = profilingJob::fromMap($map['profilingJob']);
        }

        return $model;
    }
}
