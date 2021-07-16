<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class CreateProblemTimelinesRequest extends Model
{
    /**
     * @description 故障id
     *
     * @var int
     */
    public $problemId;

    /**
     * @description 时间线节点
     *
     * @var string
     */
    public $timelineNodes;

    /**
     * @description clientToken
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'problemId'     => 'problemId',
        'timelineNodes' => 'timelineNodes',
        'clientToken'   => 'clientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }
        if (null !== $this->timelineNodes) {
            $res['timelineNodes'] = $this->timelineNodes;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProblemTimelinesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }
        if (isset($map['timelineNodes'])) {
            $model->timelineNodes = $map['timelineNodes'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
