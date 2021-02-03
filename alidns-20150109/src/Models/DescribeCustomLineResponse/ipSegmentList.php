<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCustomLineResponse;

use AlibabaCloud\Tea\Model;

class ipSegmentList extends Model
{
    /**
     * @var string
     */
    public $startIp;

    /**
     * @var string
     */
    public $endIp;
    protected $_name = [
        'startIp' => 'StartIp',
        'endIp'   => 'EndIp',
    ];

    public function validate()
    {
        Model::validateRequired('startIp', $this->startIp, true);
        Model::validateRequired('endIp', $this->endIp, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startIp) {
            $res['StartIp'] = $this->startIp;
        }
        if (null !== $this->endIp) {
            $res['EndIp'] = $this->endIp;
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
        if (isset($map['StartIp'])) {
            $model->startIp = $map['StartIp'];
        }
        if (isset($map['EndIp'])) {
            $model->endIp = $map['EndIp'];
        }

        return $model;
    }
}
