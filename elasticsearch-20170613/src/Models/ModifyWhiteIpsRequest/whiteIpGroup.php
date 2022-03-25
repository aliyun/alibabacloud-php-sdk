<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ModifyWhiteIpsRequest;

use AlibabaCloud\Tea\Model;

class whiteIpGroup extends Model
{
    /**
     * @description 白名单组的组名。如果选填了whiteIpGroup参数，则该参数必填。
     *
     * @var string
     */
    public $groupName;

    /**
     * @description 白名单组中的IP列表。如果选填了whiteIpGroup参数，则该参数必填。
     *
     * @var string[]
     */
    public $ips;

    /**
     * @description ip白名单的类型
     *
     * @var string
     */
    public $whiteIpType;
    protected $_name = [
        'groupName'   => 'groupName',
        'ips'         => 'ips',
        'whiteIpType' => 'whiteIpType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['groupName'] = $this->groupName;
        }
        if (null !== $this->ips) {
            $res['ips'] = $this->ips;
        }
        if (null !== $this->whiteIpType) {
            $res['whiteIpType'] = $this->whiteIpType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return whiteIpGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['groupName'])) {
            $model->groupName = $map['groupName'];
        }
        if (isset($map['ips'])) {
            if (!empty($map['ips'])) {
                $model->ips = $map['ips'];
            }
        }
        if (isset($map['whiteIpType'])) {
            $model->whiteIpType = $map['whiteIpType'];
        }

        return $model;
    }
}
