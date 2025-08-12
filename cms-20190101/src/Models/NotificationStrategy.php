<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy\escalationSetting;
use AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy\filterSetting;
use AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy\groupingSetting;
use AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy\pushingSetting;
use AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy\routeSetting;

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
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'escalationSetting' => 'EscalationSetting',
        'filterSetting' => 'FilterSetting',
        'groupingSetting' => 'GroupingSetting',
        'name' => 'Name',
        'product' => 'Product',
        'pushingSetting' => 'PushingSetting',
        'routeSetting' => 'RouteSetting',
        'updateTime' => 'UpdateTime',
        'userId' => 'UserId',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        if (null !== $this->escalationSetting) {
            $this->escalationSetting->validate();
        }
        if (null !== $this->filterSetting) {
            $this->filterSetting->validate();
        }
        if (null !== $this->groupingSetting) {
            $this->groupingSetting->validate();
        }
        if (null !== $this->pushingSetting) {
            $this->pushingSetting->validate();
        }
        if (null !== $this->routeSetting) {
            $this->routeSetting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->escalationSetting) {
            $res['EscalationSetting'] = null !== $this->escalationSetting ? $this->escalationSetting->toArray($noStream) : $this->escalationSetting;
        }

        if (null !== $this->filterSetting) {
            $res['FilterSetting'] = null !== $this->filterSetting ? $this->filterSetting->toArray($noStream) : $this->filterSetting;
        }

        if (null !== $this->groupingSetting) {
            $res['GroupingSetting'] = null !== $this->groupingSetting ? $this->groupingSetting->toArray($noStream) : $this->groupingSetting;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        if (null !== $this->pushingSetting) {
            $res['PushingSetting'] = null !== $this->pushingSetting ? $this->pushingSetting->toArray($noStream) : $this->pushingSetting;
        }

        if (null !== $this->routeSetting) {
            $res['RouteSetting'] = null !== $this->routeSetting ? $this->routeSetting->toArray($noStream) : $this->routeSetting;
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
