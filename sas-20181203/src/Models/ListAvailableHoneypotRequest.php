<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListAvailableHoneypotRequest extends Model
{
    /**
     * @description The ID of the management node to which the honeypot is deployed.
     *
     * @example 4341018b-8e01-43f6-b1d2-af29a2a4****
     *
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'nodeId' => 'NodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAvailableHoneypotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
