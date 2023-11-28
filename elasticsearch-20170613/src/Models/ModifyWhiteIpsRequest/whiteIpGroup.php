<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ModifyWhiteIpsRequest;

use AlibabaCloud\Tea\Model;

class whiteIpGroup extends Model
{
    /**
     * @description The type of the IP address whitelist. Valid values:
     *
     *   PRIVATE_KIBANA
     *   PRIVATE_ES
     *   PUBLIC_ES
     *   PUBLIC_KIBANA
     *
     * @example test_group
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The returned result.
     *
     * @var string[]
     */
    public $ips;

    /**
     * @description The request ID.
     *
     * @example PRIVATE_ES
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
