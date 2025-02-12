<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAllowedIpListResponseBody\allowedList;

use AlibabaCloud\Dara\Model;

class internetList extends Model
{
    /**
     * @var string[]
     */
    public $allowedIpGroup;
    /**
     * @var string[]
     */
    public $allowedIpList;
    /**
     * @var string
     */
    public $portRange;
    protected $_name = [
        'allowedIpGroup' => 'AllowedIpGroup',
        'allowedIpList'  => 'AllowedIpList',
        'portRange'      => 'PortRange',
    ];

    public function validate()
    {
        if (\is_array($this->allowedIpGroup)) {
            Model::validateArray($this->allowedIpGroup);
        }
        if (\is_array($this->allowedIpList)) {
            Model::validateArray($this->allowedIpList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedIpGroup) {
            if (\is_array($this->allowedIpGroup)) {
                $res['AllowedIpGroup'] = [];
                foreach ($this->allowedIpGroup as $key1 => $value1) {
                    $res['AllowedIpGroup'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->allowedIpList) {
            if (\is_array($this->allowedIpList)) {
                $res['AllowedIpList'] = [];
                $n1                   = 0;
                foreach ($this->allowedIpList as $item1) {
                    $res['AllowedIpList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
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
        if (isset($map['AllowedIpGroup'])) {
            if (!empty($map['AllowedIpGroup'])) {
                $model->allowedIpGroup = [];
                foreach ($map['AllowedIpGroup'] as $key1 => $value1) {
                    $model->allowedIpGroup[$key1] = $value1;
                }
            }
        }

        if (isset($map['AllowedIpList'])) {
            if (!empty($map['AllowedIpList'])) {
                $model->allowedIpList = [];
                $n1                   = 0;
                foreach ($map['AllowedIpList'] as $item1) {
                    $model->allowedIpList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }

        return $model;
    }
}
