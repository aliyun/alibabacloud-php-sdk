<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Tea\Model;

class BatchSubmitReviewInfoRequest extends Model
{
    /**
     * @description baseMeAgentId
     *
     * @var int
     */
    public $baseMeAgentId;

    /**
     * @example {"isSchemeData":1,"schemeTaskConfigId":334,"sourceDataType":2,"startTime":"2022-08-25 00:00:00","endTime":"2022-09-23 23:59:59","sessionList":[{"taskId":"20220831-F8D7F4DF-0A16-1A1C-BA63-28F203922692","fileId":"20220831-164343"},{"taskId":"20220831-F2A50A72-82C4-1E3F-A1FD-52A662283D25","fileId":"20220831-164343"}]}
     *
     * @var string
     */
    public $jsonStr;
    protected $_name = [
        'baseMeAgentId' => 'BaseMeAgentId',
        'jsonStr'       => 'jsonStr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseMeAgentId) {
            $res['BaseMeAgentId'] = $this->baseMeAgentId;
        }
        if (null !== $this->jsonStr) {
            $res['jsonStr'] = $this->jsonStr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchSubmitReviewInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseMeAgentId'])) {
            $model->baseMeAgentId = $map['BaseMeAgentId'];
        }
        if (isset($map['jsonStr'])) {
            $model->jsonStr = $map['jsonStr'];
        }

        return $model;
    }
}
