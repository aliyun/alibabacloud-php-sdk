<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNetTestResultResponseBody\commTest;

use AlibabaCloud\Dara\Model;

class hosts extends Model
{
    /**
     * @var string
     */
    public $IP;
    /**
     * @var string
     */
    public $resourceId;
    /**
     * @var string
     */
    public $serverName;
    protected $_name = [
        'IP'         => 'IP',
        'resourceId' => 'ResourceId',
        'serverName' => 'ServerName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->serverName) {
            $res['ServerName'] = $this->serverName;
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
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ServerName'])) {
            $model->serverName = $map['ServerName'];
        }

        return $model;
    }
}
