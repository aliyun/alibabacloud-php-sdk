<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;

class ConfigInstanceSecurityGroupsRequest extends Model
{
    /**
     * @var string[]
     */
    public $authorizedSecurityGroups;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'authorizedSecurityGroups' => 'AuthorizedSecurityGroups',
        'instanceId' => 'InstanceId',
        'lang' => 'Lang',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->authorizedSecurityGroups)) {
            Model::validateArray($this->authorizedSecurityGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizedSecurityGroups) {
            if (\is_array($this->authorizedSecurityGroups)) {
                $res['AuthorizedSecurityGroups'] = [];
                $n1 = 0;
                foreach ($this->authorizedSecurityGroups as $item1) {
                    $res['AuthorizedSecurityGroups'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizedSecurityGroups'])) {
            if (!empty($map['AuthorizedSecurityGroups'])) {
                $model->authorizedSecurityGroups = [];
                $n1 = 0;
                foreach ($map['AuthorizedSecurityGroups'] as $item1) {
                    $model->authorizedSecurityGroups[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
