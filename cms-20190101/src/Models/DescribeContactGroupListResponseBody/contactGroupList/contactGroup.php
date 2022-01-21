<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactGroupListResponseBody\contactGroupList;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactGroupListResponseBody\contactGroupList\contactGroup\contacts;
use AlibabaCloud\Tea\Model;

class contactGroup extends Model
{
    /**
     * @var contacts
     */
    public $contacts;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $describe;

    /**
     * @var bool
     */
    public $enableSubscribed;

    /**
     * @var bool
     */
    public $enabledWeeklyReport;

    /**
     * @var string
     */
    public $name;

    /**
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
