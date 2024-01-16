<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookResponseBody\playbook;
use AlibabaCloud\Tea\Model;

class DescribePlaybookResponseBody extends Model
{
    /**
     * @description The configuration of the playbook.
     *
     * @var playbook
     */
    public $playbook;

    /**
     * @description The request ID.
     *
     * @example 2989BC59-E9F0-5C83-B453-B368857649C8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'playbook'  => 'Playbook',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->playbook) {
            $res['Playbook'] = null !== $this->playbook ? $this->playbook->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePlaybookResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Playbook'])) {
            $model->playbook = playbook::fromMap($map['Playbook']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
