<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class BindConfigGroupResponseBody extends Model
{
    /**
     * @description The ID of the configuration group.
     *
     * @example ccg-0chlk9b65lj****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the request.
     *
     * @example E54EB497-D7B7-5F04-B744-D8DFA7B******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groupId'   => 'GroupId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindConfigGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
