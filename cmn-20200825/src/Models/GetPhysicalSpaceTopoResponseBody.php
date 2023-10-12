<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\GetPhysicalSpaceTopoResponseBody\topoData;
use AlibabaCloud\Tea\Model;

class GetPhysicalSpaceTopoResponseBody extends Model
{
    /**
     * @example F6EC6EAF-8C8F-5D72-BE74-FD03A1123450
     *
     * @var string
     */
    public $requestId;

    /**
     * @var topoData
     */
    public $topoData;
    protected $_name = [
        'requestId' => 'RequestId',
        'topoData'  => 'TopoData',
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
        if (null !== $this->topoData) {
            $res['TopoData'] = null !== $this->topoData ? $this->topoData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPhysicalSpaceTopoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TopoData'])) {
            $model->topoData = topoData::fromMap($map['TopoData']);
        }

        return $model;
    }
}
