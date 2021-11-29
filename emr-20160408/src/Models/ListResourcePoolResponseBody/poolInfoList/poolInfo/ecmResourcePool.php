<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListResourcePoolResponseBody\poolInfoList\poolInfo;

use AlibabaCloud\Tea\Model;

class ecmResourcePool extends Model
{
    /**
     * @var bool
     */
    public $active;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $note;

    /**
     * @var string
     */
    public $poolType;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $yarnSiteConfig;
    protected $_name = [
        'active'         => 'Active',
        'id'             => 'Id',
        'name'           => 'Name',
        'note'           => 'Note',
        'poolType'       => 'PoolType',
        'userId'         => 'UserId',
        'yarnSiteConfig' => 'YarnSiteConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->poolType) {
            $res['PoolType'] = $this->poolType;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->yarnSiteConfig) {
            $res['YarnSiteConfig'] = $this->yarnSiteConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecmResourcePool
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['PoolType'])) {
            $model->poolType = $map['PoolType'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['YarnSiteConfig'])) {
            $model->yarnSiteConfig = $map['YarnSiteConfig'];
        }

        return $model;
    }
}
