<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateListenerRequest\defaultActions\forwardGroupConfig;

use AlibabaCloud\Tea\Model;

class serverGroupTuples extends Model
{
    /**
     * @description The ID of the server group to which requests are forwarded.
     *
     * @example rsp-cige6j****
     *
     * @var string
     */
    public $serverGroupId;
    protected $_name = [
        'serverGroupId' => 'ServerGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serverGroupId) {
            $res['ServerGroupId'] = $this->serverGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serverGroupTuples
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServerGroupId'])) {
            $model->serverGroupId = $map['ServerGroupId'];
        }

        return $model;
    }
}
