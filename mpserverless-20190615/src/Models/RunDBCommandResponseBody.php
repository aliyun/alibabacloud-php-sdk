<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class RunDBCommandResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $affectedDocs;

    /**
     * @example F75E60FA-7583-4E2E-AC14-6C608F89804
     *
     * @var string
     */
    public $requestId;

    /**
     * @example {"_id":"5d107e5af957c439d505b95b","age":1,"name":"aaaaa","time":1561362071732}
     *
     * @var string
     */
    public $result;
    protected $_name = [
        'affectedDocs' => 'AffectedDocs',
        'requestId'    => 'RequestId',
        'result'       => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->affectedDocs) {
            $res['AffectedDocs'] = $this->affectedDocs;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunDBCommandResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AffectedDocs'])) {
            $model->affectedDocs = $map['AffectedDocs'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
