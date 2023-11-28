<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateKibanaWhiteIpsResponseBody\result\networkConfig;

use AlibabaCloud\Tea\Model;

class whiteIpGroupList extends Model
{
    /**
     * @description The IP addresses in the whitelist.
     *
     * @example test_group_name
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The IP addresses in the whitelist.
     *
     * @var string[]
     */
    public $ips;

    /**
     * @example PUBLIC_KIBANA
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
     * @return whiteIpGroupList
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
