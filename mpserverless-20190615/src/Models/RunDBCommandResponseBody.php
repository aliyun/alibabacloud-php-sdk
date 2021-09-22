<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class RunDBCommandResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $result;

    /**
     * @var int
     */
    public $affectedDocs;
    protected $_name = [
        'requestId'    => 'RequestId',
        'result'       => 'Result',
        'affectedDocs' => 'AffectedDocs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->affectedDocs) {
            $res['AffectedDocs'] = $this->affectedDocs;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['AffectedDocs'])) {
            $model->affectedDocs = $map['AffectedDocs'];
        }

        return $model;
    }
}
