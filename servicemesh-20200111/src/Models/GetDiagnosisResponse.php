<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class GetDiagnosisResponse extends Model
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
     * @var string
     */
    public $runAt;
    protected $_name = [
        'requestId' => 'RequestId',
        'result'    => 'Result',
        'runAt'     => 'RunAt',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('result', $this->result, true);
        Model::validateRequired('runAt', $this->runAt, true);
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
        if (null !== $this->runAt) {
            $res['RunAt'] = $this->runAt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDiagnosisResponse
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
        if (isset($map['RunAt'])) {
            $model->runAt = $map['RunAt'];
        }

        return $model;
    }
}
