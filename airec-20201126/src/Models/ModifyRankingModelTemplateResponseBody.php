<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class ModifyRankingModelTemplateResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 829F38F6-E2D6-4109-90A6-888160BD16C2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the ranking model.
     *
     * @var RankingModelTemplate
     */
    public $result;
    protected $_name = [
        'requestId' => 'requestId',
        'result'    => 'result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['result'] = null !== $this->result ? $this->result->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyRankingModelTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['result'])) {
            $model->result = RankingModelTemplate::fromMap($map['result']);
        }

        return $model;
    }
}
