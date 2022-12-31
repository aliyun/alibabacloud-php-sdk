<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetLiveEditingIndexFileResponseBody extends Model
{
    /**
     * @var string
     */
    public $indexFile;

    /**
     * @example 4E84BE44-58A7-****-****-FBEBEA16EF94
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'indexFile' => 'IndexFile',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->indexFile) {
            $res['IndexFile'] = $this->indexFile;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['IndexFile'])) {
            $model->indexFile = $map['IndexFile'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
