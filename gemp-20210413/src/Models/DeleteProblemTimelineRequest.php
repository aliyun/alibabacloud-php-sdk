<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class DeleteProblemTimelineRequest extends Model
{
    /**
     * @example 601FA6A2-AC5C-4B59-BE11-378FTOKENA11
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 102
     *
     * @var int
     */
    public $problemId;

    /**
     * @example 11
     *
     * @var int
     */
    public $problemTimelineId;
    protected $_name = [
        'clientToken'       => 'clientToken',
        'problemId'         => 'problemId',
        'problemTimelineId' => 'problemTimelineId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }
        if (null !== $this->problemTimelineId) {
            $res['problemTimelineId'] = $this->problemTimelineId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteProblemTimelineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }
        if (isset($map['problemTimelineId'])) {
            $model->problemTimelineId = $map['problemTimelineId'];
        }

        return $model;
    }
}
