<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ChangeDeployGroupRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $eccInfo;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var bool
     */
    public $forceStatus;
    protected $_name = [
        'appId'       => 'AppId',
        'eccInfo'     => 'EccInfo',
        'groupName'   => 'GroupName',
        'forceStatus' => 'ForceStatus',
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
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->forceStatus) {
            $res['ForceStatus'] = $this->forceStatus;
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
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['ForceStatus'])) {
            $model->forceStatus = $map['ForceStatus'];
        }

        return $model;
    }
}
