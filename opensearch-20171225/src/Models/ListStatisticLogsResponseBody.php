<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListStatisticLogsResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example F76ACE3D-E510-EE2C-B7B1-39B3136A61EE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The return result. For more information, see:
     *
     *   [Parameters of hotwords rankings](~~421248~~)
     *
     * @example []
     *
     * @var mixed[][]
     */
    public $result;

    /**
     * @description The total number of the queried logs.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'  => 'requestId',
        'result'     => 'result',
        'totalCount' => 'totalCount',
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
            $res['result'] = $this->result;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStatisticLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['result'])) {
            if (!empty($map['result'])) {
                $model->result = $map['result'];
            }
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
