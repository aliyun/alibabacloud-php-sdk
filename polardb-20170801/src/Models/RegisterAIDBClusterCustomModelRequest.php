<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class RegisterAIDBClusterCustomModelRequest extends Model
{
    /**
     * @var string
     */
    public $customOssBucketName;

    /**
     * @var string
     */
    public $customOssBucketPath;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $displayModelName;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'customOssBucketName' => 'CustomOssBucketName',
        'customOssBucketPath' => 'CustomOssBucketPath',
        'DBClusterId' => 'DBClusterId',
        'displayModelName' => 'DisplayModelName',
        'modelName' => 'ModelName',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customOssBucketName) {
            $res['CustomOssBucketName'] = $this->customOssBucketName;
        }

        if (null !== $this->customOssBucketPath) {
            $res['CustomOssBucketPath'] = $this->customOssBucketPath;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->displayModelName) {
            $res['DisplayModelName'] = $this->displayModelName;
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['CustomOssBucketName'])) {
            $model->customOssBucketName = $map['CustomOssBucketName'];
        }

        if (isset($map['CustomOssBucketPath'])) {
            $model->customOssBucketPath = $map['CustomOssBucketPath'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DisplayModelName'])) {
            $model->displayModelName = $map['DisplayModelName'];
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
