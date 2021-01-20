<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactGroupListResponseBody\contactGroupList;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactGroupListResponseBody\contactGroupList\contactGroup\contacts;
use AlibabaCloud\Tea\Model;

class contactGroup extends Model
{
    /**
     * @var string
     */
    public $describe;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var contacts
     */
    public $contacts;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var bool
     */
    public $enabledWeeklyReport;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $enableSubscribed;
    protected $_name = [
        'describe'            => 'Describe',
        'updateTime'          => 'UpdateTime',
        'contacts'            => 'Contacts',
        'createTime'          => 'CreateTime',
        'enabledWeeklyReport' => 'EnabledWeeklyReport',
        'name'                => 'Name',
        'enableSubscribed'    => 'EnableSubscribed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->describe) {
            $res['Describe'] = $this->describe;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->contacts) {
            $res['Contacts'] = null !== $this->contacts ? $this->contacts->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->enabledWeeklyReport) {
            $res['EnabledWeeklyReport'] = $this->enabledWeeklyReport;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->enableSubscribed) {
            $res['EnableSubscribed'] = $this->enableSubscribed;
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
        if (isset($map['Describe'])) {
            $model->describe = $map['Describe'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Contacts'])) {
            $model->contacts = contacts::fromMap($map['Contacts']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EnabledWeeklyReport'])) {
            $model->enabledWeeklyReport = $map['EnabledWeeklyReport'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['EnableSubscribed'])) {
            $model->enableSubscribed = $map['EnableSubscribed'];
        }

        return $model;
    }
}
