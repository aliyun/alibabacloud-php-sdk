<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeIpInfoRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $field;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'ip'       => 'Ip',
        'field'    => 'Field',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->field) {
            $res['Field'] = $this->field;
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
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }

        return $model;
    }
}
