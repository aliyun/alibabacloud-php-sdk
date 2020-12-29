<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCustomLineResponseBody;

use AlibabaCloud\Tea\Model;

class ipSegmentList extends Model
{
    /**
     * @var string
     */
    public $endIp;

    /**
     * @var string
     */
    public $startIp;
    protected $_name = [
        'endIp'   => 'EndIp',
        'startIp' => 'StartIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endIp) {
            $res['EndIp'] = $this->endIp;
        }
        if (null !== $this->startIp) {
            $res['StartIp'] = $this->startIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipSegmentList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndIp'])) {
            $model->endIp = $map['EndIp'];
        }
        if (isset($map['StartIp'])) {
            $model->startIp = $map['StartIp'];
        }

        return $model;
    }
}
