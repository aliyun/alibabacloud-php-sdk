<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanResponseBody\previews;

use AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanResponseBody\previews\preview\switchInfos;
use AlibabaCloud\Tea\Model;

class preview extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var switchInfos
     */
    public $switchInfos;

    /**
     * @var string
     */
    public $userDomainName;
    protected $_name = [
        'instanceId'     => 'InstanceId',
        'name'           => 'Name',
        'switchInfos'    => 'SwitchInfos',
        'userDomainName' => 'UserDomainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->switchInfos) {
            $res['SwitchInfos'] = null !== $this->switchInfos ? $this->switchInfos->toMap() : null;
        }
        if (null !== $this->userDomainName) {
            $res['UserDomainName'] = $this->userDomainName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return preview
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SwitchInfos'])) {
            $model->switchInfos = switchInfos::fromMap($map['SwitchInfos']);
        }
        if (isset($map['UserDomainName'])) {
            $model->userDomainName = $map['UserDomainName'];
        }

        return $model;
    }
}
