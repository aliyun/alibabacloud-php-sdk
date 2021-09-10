<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetLiveEditingIndexFileResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $indexFile;
    protected $_name = [
        'requestId' => 'RequestId',
        'indexFile' => 'IndexFile',
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
        if (null !== $this->indexFile) {
            $res['IndexFile'] = $this->indexFile;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLiveEditingIndexFileResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IndexFile'])) {
            $model->indexFile = $map['IndexFile'];
        }

        return $model;
    }
}
