<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class UpdateGroupRequest extends Model
{
    /**
     * @var string
     */
    public $groupPrincipalName;

    /**
     * @var string
     */
    public $newGroupPrincipalName;

    /**
     * @var string
     */
    public $newComments;

    /**
     * @var string
     */
    public $newDisplayName;

    /**
     * @var string
     */
    public $akProxySuffix;

    /**
     * @var string
     */
    public $newGroupName;

    /**
     * @var string
     */
    public $groupName;
    protected $_name = [
        'groupPrincipalName'    => 'GroupPrincipalName',
        'newGroupPrincipalName' => 'NewGroupPrincipalName',
        'newComments'           => 'NewComments',
        'newDisplayName'        => 'NewDisplayName',
        'akProxySuffix'         => 'AkProxySuffix',
        'newGroupName'          => 'NewGroupName',
        'groupName'             => 'GroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupPrincipalName) {
            $res['GroupPrincipalName'] = $this->groupPrincipalName;
        }
        if (null !== $this->newGroupPrincipalName) {
            $res['NewGroupPrincipalName'] = $this->newGroupPrincipalName;
        }
        if (null !== $this->newComments) {
            $res['NewComments'] = $this->newComments;
        }
        if (null !== $this->newDisplayName) {
            $res['NewDisplayName'] = $this->newDisplayName;
        }
        if (null !== $this->akProxySuffix) {
            $res['AkProxySuffix'] = $this->akProxySuffix;
        }
        if (null !== $this->newGroupName) {
            $res['NewGroupName'] = $this->newGroupName;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupPrincipalName'])) {
            $model->groupPrincipalName = $map['GroupPrincipalName'];
        }
        if (isset($map['NewGroupPrincipalName'])) {
            $model->newGroupPrincipalName = $map['NewGroupPrincipalName'];
        }
        if (isset($map['NewComments'])) {
            $model->newComments = $map['NewComments'];
        }
        if (isset($map['NewDisplayName'])) {
            $model->newDisplayName = $map['NewDisplayName'];
        }
        if (isset($map['AkProxySuffix'])) {
            $model->akProxySuffix = $map['AkProxySuffix'];
        }
        if (isset($map['NewGroupName'])) {
            $model->newGroupName = $map['NewGroupName'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
