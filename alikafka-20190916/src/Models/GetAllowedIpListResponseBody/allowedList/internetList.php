<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAllowedIpListResponseBody\allowedList;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowedIpGroup) {
            $res['AllowedIpGroup'] = $this->allowedIpGroup;
        }
        if (null !== $this->allowedIpList) {
            $res['AllowedIpList'] = $this->allowedIpList;
        }
        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return internetList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowedIpGroup'])) {
            $model->allowedIpGroup = $map['AllowedIpGroup'];
        }
        if (isset($map['AllowedIpList'])) {
            if (!empty($map['AllowedIpList'])) {
                $model->allowedIpList = $map['AllowedIpList'];
            }
        }
        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }

        return $model;
    }
}
