<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\SDK\Airec\V20201126\Models\ListUserClustersResponseBody\headers;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListUserClustersResponseBody\result;
use AlibabaCloud\Tea\Model;

class ListUserClustersResponseBody extends Model
{
    /**
     * @description headers info
     *
     * @var headers
     */
    public $headers;

    /**
     * @example 1E2CBBA8-C623-4FEE-BC84-9672E460CA39
     *
     * @var string
     */
    public $requestId;

    /**
     * @var result[]
     */
    public $result;
    protected $_name = [
        'headers'   => 'headers',
        'requestId' => 'requestId',
        'result'    => 'result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->headers) {
            $res['headers'] = null !== $this->headers ? $this->headers->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['result'] = [];
            if (null !== $this->result && \is_array($this->result)) {
                $n = 0;
                foreach ($this->result as $item) {
                    $res['result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserClustersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['headers'])) {
            $model->headers = headers::fromMap($map['headers']);
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['result'])) {
            if (!empty($map['result'])) {
                $model->result = [];
                $n             = 0;
                foreach ($map['result'] as $item) {
                    $model->result[$n++] = null !== $item ? result::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
