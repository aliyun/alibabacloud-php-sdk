<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class WhiteIpGroup extends Model
{
    /**
     * @var string
     */
    public $whiteIpType;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string[]
     */
    public $ips;
    protected $_name = [
        'whiteIpType' => 'WhiteIpType',
        'groupName'   => 'groupName',
        'ips'         => 'ips',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->whiteIpType) {
            $res['WhiteIpType'] = $this->whiteIpType;
        }
        if (null !== $this->groupName) {
            $res['groupName'] = $this->groupName;
        }
        if (null !== $this->ips) {
            $res['ips'] = $this->ips;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WhiteIpGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WhiteIpType'])) {
            $model->whiteIpType = $map['WhiteIpType'];
        }
        if (isset($map['groupName'])) {
            $model->groupName = $map['groupName'];
        }
        if (isset($map['ips'])) {
            if (!empty($map['ips'])) {
                $model->ips = $map['ips'];
            }
        }

        return $model;
    }
}
