<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListCloudAccountResourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListCloudAccountResourcesResponseBody\cloudAccountResources\cloudAccountResourceMeta;

class cloudAccountResources extends Model
{
    /**
     * @var string
     */
    public $cloudAccountId;

    /**
     * @var string
     */
    public $cloudAccountResourceEntityId;

    /**
     * @var string
     */
    public $cloudAccountResourceEntityType;

    /**
     * @var string
     */
    public $cloudAccountResourceId;

    /**
     * @var cloudAccountResourceMeta
     */
    public $cloudAccountResourceMeta;

    /**
     * @var string
     */
    public $cloudAccountResourceName;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'cloudAccountId' => 'CloudAccountId',
        'cloudAccountResourceEntityId' => 'CloudAccountResourceEntityId',
        'cloudAccountResourceEntityType' => 'CloudAccountResourceEntityType',
        'cloudAccountResourceId' => 'CloudAccountResourceId',
        'cloudAccountResourceMeta' => 'CloudAccountResourceMeta',
        'cloudAccountResourceName' => 'CloudAccountResourceName',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->cloudAccountResourceMeta) {
            $this->cloudAccountResourceMeta->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudAccountId) {
            $res['CloudAccountId'] = $this->cloudAccountId;
        }

        if (null !== $this->cloudAccountResourceEntityId) {
            $res['CloudAccountResourceEntityId'] = $this->cloudAccountResourceEntityId;
        }

        if (null !== $this->cloudAccountResourceEntityType) {
            $res['CloudAccountResourceEntityType'] = $this->cloudAccountResourceEntityType;
        }

        if (null !== $this->cloudAccountResourceId) {
            $res['CloudAccountResourceId'] = $this->cloudAccountResourceId;
        }

        if (null !== $this->cloudAccountResourceMeta) {
            $res['CloudAccountResourceMeta'] = null !== $this->cloudAccountResourceMeta ? $this->cloudAccountResourceMeta->toArray($noStream) : $this->cloudAccountResourceMeta;
        }

        if (null !== $this->cloudAccountResourceName) {
            $res['CloudAccountResourceName'] = $this->cloudAccountResourceName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CloudAccountId'])) {
            $model->cloudAccountId = $map['CloudAccountId'];
        }

        if (isset($map['CloudAccountResourceEntityId'])) {
            $model->cloudAccountResourceEntityId = $map['CloudAccountResourceEntityId'];
        }

        if (isset($map['CloudAccountResourceEntityType'])) {
            $model->cloudAccountResourceEntityType = $map['CloudAccountResourceEntityType'];
        }

        if (isset($map['CloudAccountResourceId'])) {
            $model->cloudAccountResourceId = $map['CloudAccountResourceId'];
        }

        if (isset($map['CloudAccountResourceMeta'])) {
            $model->cloudAccountResourceMeta = cloudAccountResourceMeta::fromMap($map['CloudAccountResourceMeta']);
        }

        if (isset($map['CloudAccountResourceName'])) {
            $model->cloudAccountResourceName = $map['CloudAccountResourceName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
