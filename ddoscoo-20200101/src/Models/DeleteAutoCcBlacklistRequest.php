<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DeleteAutoCcBlacklistRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $blacklist;
    protected $_name = [
        'sourceIp'   => 'SourceIp',
        'instanceId' => 'InstanceId',
        'blacklist'  => 'Blacklist',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->blacklist) {
            $res['Blacklist'] = $this->blacklist;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAutoCcBlacklistRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Blacklist'])) {
            $model->blacklist = $map['Blacklist'];
        }

        return $model;
    }
}
