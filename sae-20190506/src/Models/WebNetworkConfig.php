<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class WebNetworkConfig extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $internetAccess;

    /**
     * @example sg-bp18hj1wtxgy3b0***
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string[]
     */
    public $vSwitchIds;
    protected $_name = [
        'internetAccess'  => 'InternetAccess',
        'securityGroupId' => 'SecurityGroupId',
        'vSwitchIds'      => 'VSwitchIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->internetAccess) {
            $res['InternetAccess'] = $this->internetAccess;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WebNetworkConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InternetAccess'])) {
            $model->internetAccess = $map['InternetAccess'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = $map['VSwitchIds'];
            }
        }

        return $model;
    }
}
