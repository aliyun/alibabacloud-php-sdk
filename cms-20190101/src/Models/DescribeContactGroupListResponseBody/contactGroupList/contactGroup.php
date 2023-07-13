<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactGroupListResponseBody\contactGroupList;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactGroupListResponseBody\contactGroupList\contactGroup\contacts;
use AlibabaCloud\Tea\Model;

class contactGroup extends Model
{
    /**
     * @description Queries alert groups.
     *
     * @var contacts
     */
    public $contacts;

    /**
     * @description Indicates whether the alert group can subscribe to weekly reports. Valid values:
     *
     *   true: The alert group can subscribe to weekly reports.
     *   false: The alert group cannot subscribe to weekly reports.
     *
     * >  The weekly report subscription feature is only available for Alibaba Cloud accounts with more than five Elastic Compute Service (ECS) instances.
     * @example 1507070598000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The time when the alert group was modified. This value is a UNIX timestamp that represents the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @var string
     */
    public $describe;

    /**
     * @description The alert contacts in the alert group.
     *
     * @example true
     *
     * @var bool
     */
    public $enableSubscribed;

    /**
     * @description The name of the alert group.
     *
     * @example true
     *
     * @var bool
     */
    public $enabledWeeklyReport;

    /**
     * @description Indicates whether the alert group subscribes to weekly reports. Valid values:
     *
     *   true: The alert group subscribes to weekly reports.
     *   false: The alert group does not subscribe to weekly reports.
     *
     * @example Contact1
     *
     * @var string
     */
    public $name;

    /**
     * @description The time when the alert group was created. This value is a UNIX timestamp that represents the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1589447759000
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'contacts'            => 'Contacts',
        'createTime'          => 'CreateTime',
        'describe'            => 'Describe',
        'enableSubscribed'    => 'EnableSubscribed',
        'enabledWeeklyReport' => 'EnabledWeeklyReport',
        'name'                => 'Name',
        'updateTime'          => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contacts) {
            $res['Contacts'] = null !== $this->contacts ? $this->contacts->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->describe) {
            $res['Describe'] = $this->describe;
        }
        if (null !== $this->enableSubscribed) {
            $res['EnableSubscribed'] = $this->enableSubscribed;
        }
        if (null !== $this->enabledWeeklyReport) {
            $res['EnabledWeeklyReport'] = $this->enabledWeeklyReport;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contactGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Contacts'])) {
            $model->contacts = contacts::fromMap($map['Contacts']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Describe'])) {
            $model->describe = $map['Describe'];
        }
        if (isset($map['EnableSubscribed'])) {
            $model->enableSubscribed = $map['EnableSubscribed'];
        }
        if (isset($map['EnabledWeeklyReport'])) {
            $model->enabledWeeklyReport = $map['EnabledWeeklyReport'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
