<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAllowedIpListResponseBody\allowedList;

use AlibabaCloud\Tea\Model;

class internetList extends Model
{
    /**
     * @var string
     */
    public $portRange;

    /**
     * @var string[]
     */
    public $allowedIpList;
    protected $_name = [
        'portRange'     => 'PortRange',
        'allowedIpList' => 'AllowedIpList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }
        if (null !== $this->allowedIpList) {
            $res['AllowedIpList'] = $this->allowedIpList;
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
        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }
        if (isset($map['AllowedIpList'])) {
            if (!empty($map['AllowedIpList'])) {
                $model->allowedIpList = $map['AllowedIpList'];
            }
        }

        return $model;
    }
}
