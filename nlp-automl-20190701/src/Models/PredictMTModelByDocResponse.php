<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20190701\Models;

use AlibabaCloud\Tea\Model;

class PredictMTModelByDocResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $docId;
    protected $_name = [
        'requestId' => 'RequestId',
        'docId'     => 'DocId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('docId', $this->docId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PredictMTModelByDocResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }

        return $model;
    }
}
