<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

class DeleteAutoCcBlacklistRequest extends Model
{
    /**
     * @var string
     */
    public $blacklist;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $queryType;
    protected $_name = [
        'blacklist'  => 'Blacklist',
        'instanceId' => 'InstanceId',
        'queryType'  => 'QueryType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blacklist) {
            $res['Blacklist'] = $this->blacklist;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Blacklist'])) {
            $model->blacklist = $map['Blacklist'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }

        return $model;
    }
}
