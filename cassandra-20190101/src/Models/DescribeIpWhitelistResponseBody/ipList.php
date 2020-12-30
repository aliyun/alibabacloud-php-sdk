<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeIpWhitelistResponseBody;

use AlibabaCloud\Tea\Model;

class ipList extends Model
{
    /**
     * @var string[]
     */
    public $IP;
    protected $_name = [
        'IP' => 'IP',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IP'])) {
            if (!empty($map['IP'])) {
                $model->IP = $map['IP'];
            }
        }

        return $model;
    }
}
