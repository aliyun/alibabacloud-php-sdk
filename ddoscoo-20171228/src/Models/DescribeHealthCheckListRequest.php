<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class DescribeHealthCheckListRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $listeners;
    protected $_name = [
        'sourceIp'  => 'SourceIp',
        'listeners' => 'Listeners',
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
        if (null !== $this->listeners) {
            $res['Listeners'] = $this->listeners;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHealthCheckListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Listeners'])) {
            $model->listeners = $map['Listeners'];
        }

        return $model;
    }
}
