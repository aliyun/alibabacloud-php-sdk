<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListLdpsComputeGroupsResponseBody;

use AlibabaCloud\Dara\Model;

class groupList extends Model
{
    /**
     * @var string
     */
    public $exceptionInfo;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var mixed[]
     */
    public $properties;

    /**
     * @var string
     */
    public $rayInteractiveAccessAddr;

    /**
     * @var string
     */
    public $rayVpcWebUIAddr;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $webUI;
    protected $_name = [
        'exceptionInfo' => 'ExceptionInfo',
        'groupName' => 'GroupName',
        'isDefault' => 'IsDefault',
        'properties' => 'Properties',
        'rayInteractiveAccessAddr' => 'RayInteractiveAccessAddr',
        'rayVpcWebUIAddr' => 'RayVpcWebUIAddr',
        'state' => 'State',
        'webUI' => 'WebUI',
    ];

    public function validate()
    {
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exceptionInfo) {
            $res['ExceptionInfo'] = $this->exceptionInfo;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['Properties'] = [];
                foreach ($this->properties as $key1 => $value1) {
                    $res['Properties'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->rayInteractiveAccessAddr) {
            $res['RayInteractiveAccessAddr'] = $this->rayInteractiveAccessAddr;
        }

        if (null !== $this->rayVpcWebUIAddr) {
            $res['RayVpcWebUIAddr'] = $this->rayVpcWebUIAddr;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->webUI) {
            $res['WebUI'] = $this->webUI;
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
        if (isset($map['ExceptionInfo'])) {
            $model->exceptionInfo = $map['ExceptionInfo'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['Properties'])) {
            if (!empty($map['Properties'])) {
                $model->properties = [];
                foreach ($map['Properties'] as $key1 => $value1) {
                    $model->properties[$key1] = $value1;
                }
            }
        }

        if (isset($map['RayInteractiveAccessAddr'])) {
            $model->rayInteractiveAccessAddr = $map['RayInteractiveAccessAddr'];
        }

        if (isset($map['RayVpcWebUIAddr'])) {
            $model->rayVpcWebUIAddr = $map['RayVpcWebUIAddr'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['WebUI'])) {
            $model->webUI = $map['WebUI'];
        }

        return $model;
    }
}
