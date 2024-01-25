<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class PutGroupTopologyTagLogRequest extends Model
{
    /**
     * @var string
     */
    public $businessGroupId;

    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var string
     */
    public $topologyTag;

    /**
     * @var string
     */
    public $topologyTagShow;
    protected $_name = [
        'businessGroupId' => 'BusinessGroupId',
        'operaUid'        => 'OperaUid',
        'topologyTag'     => 'TopologyTag',
        'topologyTagShow' => 'TopologyTagShow',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessGroupId) {
            $res['BusinessGroupId'] = $this->businessGroupId;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->topologyTag) {
            $res['TopologyTag'] = $this->topologyTag;
        }
        if (null !== $this->topologyTagShow) {
            $res['TopologyTagShow'] = $this->topologyTagShow;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutGroupTopologyTagLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessGroupId'])) {
            $model->businessGroupId = $map['BusinessGroupId'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['TopologyTag'])) {
            $model->topologyTag = $map['TopologyTag'];
        }
        if (isset($map['TopologyTagShow'])) {
            $model->topologyTagShow = $map['TopologyTagShow'];
        }

        return $model;
    }
}
