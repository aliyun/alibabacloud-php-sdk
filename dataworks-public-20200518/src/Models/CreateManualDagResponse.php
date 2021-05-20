<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateManualDagResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $dagId;
    protected $_name = [
        'requestId' => 'RequestId',
        'dagId'     => 'DagId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('dagId', $this->dagId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateManualDagResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }

        return $model;
    }
}
