<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models\ListIpOrHostsResponseBody;

use AlibabaCloud\Tea\Model;

class ipNames extends Model
{
    /**
     * @var string[]
     */
    public $ipName;
    protected $_name = [
        'ipName' => 'IpName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipName) {
            $res['IpName'] = $this->ipName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipNames
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpName'])) {
            if (!empty($map['IpName'])) {
                $model->ipName = $map['IpName'];
            }
        }

        return $model;
    }
}
