<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class PutContactGroupRequest extends Model
{
    /**
     * @description The name of the alert contact group.
     *
     * For information about how to obtain the name of an alert contact group, see [DescribeContactGroupList](~~114922~~).
     * @example ECS_Group
     *
     * @var string
     */
    public $contactGroupName;

    /**
     * @example Alice
     *
     * @var string[]
     */
    public $contactNames;

    /**
     * @description The description of the alert contact group.
     *
     * @example ECS_Alert_Group
     *
     * @var string
     */
    public $describe;

    /**
     * @description Specifies whether to enable the weekly report subscription feature. Valid values:
     *
     *   true: The weekly report subscription feature is enabled.
     *   false: The weekly report subscription feature is disabled.
     *
     * >  You can enable the weekly report subscription only for an Alibaba Cloud account that has at least five Elastic Compute Service (ECS) instances.
     * @example true
     *
     * @var bool
     */
    public $enableSubscribed;
    protected $_name = [
        'contactGroupName' => 'ContactGroupName',
        'contactNames'     => 'ContactNames',
        'describe'         => 'Describe',
        'enableSubscribed' => 'EnableSubscribed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroupName) {
            $res['ContactGroupName'] = $this->contactGroupName;
        }
        if (null !== $this->contactNames) {
            $res['ContactNames'] = $this->contactNames;
        }
        if (null !== $this->describe) {
            $res['Describe'] = $this->describe;
        }
        if (null !== $this->enableSubscribed) {
            $res['EnableSubscribed'] = $this->enableSubscribed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutContactGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroupName'])) {
            $model->contactGroupName = $map['ContactGroupName'];
        }
        if (isset($map['ContactNames'])) {
            if (!empty($map['ContactNames'])) {
                $model->contactNames = $map['ContactNames'];
            }
        }
        if (isset($map['Describe'])) {
            $model->describe = $map['Describe'];
        }
        if (isset($map['EnableSubscribed'])) {
            $model->enableSubscribed = $map['EnableSubscribed'];
        }

        return $model;
    }
}
