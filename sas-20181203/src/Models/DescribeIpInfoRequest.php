<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeIpInfoRequest extends Model
{
    /**
     * @var string
     */
    public $field;

    /**
     * @var string
     */
    public $ip;
    protected $_name = [
        'field' => 'Field',
        'ip'    => 'Ip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIpInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        return $model;
    }
}
