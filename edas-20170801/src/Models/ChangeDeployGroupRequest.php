<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ChangeDeployGroupRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 3616cdca-4f92-**********
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the elastic compute component (ECC) that corresponds to the ECS instance for which you want to change the application instance group. You can call the ListApplicationEcc operation to query the ECC ID. For more information, see [ListApplicationEcc](~~199277~~).
     *
     * > You can change the application instance group for only one ECS instance at a time.
     * @example 0cf49a6c-95a8-4aa8******
     *
     * @var string
     */
    public $eccInfo;

    /**
     * @description Specifies whether to forcibly change the application instance group if the deployment package version of the ECC is different from that of the application instance group.
     *
     * @example true
     *
     * @var bool
     */
    public $forceStatus;

    /**
     * @description The name of the application instance group. Examples: group_a and group_b. The parameter value for the default application instance group is `_DEFAULT_GROUP`. The name can be up to 64 characters in length.
     *
     * @example test
     *
     * @var string
     */
    public $groupName;
    protected $_name = [
        'appId'       => 'AppId',
        'eccInfo'     => 'EccInfo',
        'forceStatus' => 'ForceStatus',
        'groupName'   => 'GroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->eccInfo) {
            $res['EccInfo'] = $this->eccInfo;
        }
        if (null !== $this->forceStatus) {
            $res['ForceStatus'] = $this->forceStatus;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeDeployGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EccInfo'])) {
            $model->eccInfo = $map['EccInfo'];
        }
        if (isset($map['ForceStatus'])) {
            $model->forceStatus = $map['ForceStatus'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
