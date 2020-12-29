<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanResponseBody;

use AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanResponseBody\previews\switchInfos;
use AlibabaCloud\Tea\Model;

class previews extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var switchInfos[]
     */
    public $switchInfos;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $userDomainName;
    protected $_name = [
        'instanceId'     => 'InstanceId',
        'switchInfos'    => 'SwitchInfos',
        'name'           => 'Name',
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
        if (null !== $this->switchInfos) {
            $res['SwitchInfos'] = [];
            if (null !== $this->switchInfos && \is_array($this->switchInfos)) {
                $n = 0;
                foreach ($this->switchInfos as $item) {
                    $res['SwitchInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->userDomainName) {
            $res['UserDomainName'] = $this->userDomainName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return previews
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SwitchInfos'])) {
            if (!empty($map['SwitchInfos'])) {
                $model->switchInfos = [];
                $n                  = 0;
                foreach ($map['SwitchInfos'] as $item) {
                    $model->switchInfos[$n++] = null !== $item ? switchInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['UserDomainName'])) {
            $model->userDomainName = $map['UserDomainName'];
        }

        return $model;
    }
}
