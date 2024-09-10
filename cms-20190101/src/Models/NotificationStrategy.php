<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy\escalationSetting;
use AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy\filterSetting;
use AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy\groupingSetting;
use AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy\pushingSetting;
use AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy\routeSetting;
use AlibabaCloud\Tea\Model;

class NotificationStrategy extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var escalationSetting
     */
    public $escalationSetting;

    /**
     * @var filterSetting
     */
    public $filterSetting;

    /**
     * @var groupingSetting
     */
    public $groupingSetting;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $product;

    /**
     * @var pushingSetting
     */
    public $pushingSetting;

    /**
     * @var routeSetting
     */
    public $routeSetting;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'createTime'        => 'CreateTime',
        'description'       => 'Description',
        'escalationSetting' => 'EscalationSetting',
        'filterSetting'     => 'FilterSetting',
        'groupingSetting'   => 'GroupingSetting',
        'name'              => 'Name',
        'product'           => 'Product',
        'pushingSetting'    => 'PushingSetting',
        'routeSetting'      => 'RouteSetting',
        'updateTime'        => 'UpdateTime',
        'userId'            => 'UserId',
        'uuid'              => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->escalationSetting) {
            $res['EscalationSetting'] = null !== $this->escalationSetting ? $this->escalationSetting->toMap() : null;
        }
        if (null !== $this->filterSetting) {
            $res['FilterSetting'] = null !== $this->filterSetting ? $this->filterSetting->toMap() : null;
        }
        if (null !== $this->groupingSetting) {
            $res['GroupingSetting'] = null !== $this->groupingSetting ? $this->groupingSetting->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->pushingSetting) {
            $res['PushingSetting'] = null !== $this->pushingSetting ? $this->pushingSetting->toMap() : null;
        }
        if (null !== $this->routeSetting) {
            $res['RouteSetting'] = null !== $this->routeSetting ? $this->routeSetting->toMap() : null;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NotificationStrategy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EscalationSetting'])) {
            $model->escalationSetting = escalationSetting::fromMap($map['EscalationSetting']);
        }
        if (isset($map['FilterSetting'])) {
            $model->filterSetting = filterSetting::fromMap($map['FilterSetting']);
        }
        if (isset($map['GroupingSetting'])) {
            $model->groupingSetting = groupingSetting::fromMap($map['GroupingSetting']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['PushingSetting'])) {
            $model->pushingSetting = pushingSetting::fromMap($map['PushingSetting']);
        }
        if (isset($map['RouteSetting'])) {
            $model->routeSetting = routeSetting::fromMap($map['RouteSetting']);
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
