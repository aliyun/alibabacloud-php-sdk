<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class QueryTreeDataResponseBody extends Model
{
    /**
     * @description The returned information about the playbook. The value is a JSON string.
     *
     * @example [
     * ]
     * @var string
     */
    public $playbooks;

    /**
     * @description The request ID.
     *
     * @example EF2ECA2D-D8E6-5021-BF5C-19DD6D52C5B2
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'playbooks' => 'Playbooks',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->playbooks) {
            $res['Playbooks'] = $this->playbooks;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTreeDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Playbooks'])) {
            $model->playbooks = $map['Playbooks'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
