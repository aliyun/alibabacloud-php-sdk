<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckStructureResponseBody\checkStructureResponse;
use AlibabaCloud\Tea\Model;

class GetCheckStructureResponseBody extends Model
{
    /**
     * @description The structure information about check items provided by the configuration assessment feature.
     *
     * @var checkStructureResponse[]
     */
    public $checkStructureResponse;

    /**
     * @description The request ID.
     *
     * @example 379a9b8f-107b-4630-9e95-2299a1ea****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'checkStructureResponse' => 'CheckStructureResponse',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkStructureResponse) {
            $res['CheckStructureResponse'] = [];
            if (null !== $this->checkStructureResponse && \is_array($this->checkStructureResponse)) {
                $n = 0;
                foreach ($this->checkStructureResponse as $item) {
                    $res['CheckStructureResponse'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCheckStructureResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckStructureResponse'])) {
            if (!empty($map['CheckStructureResponse'])) {
                $model->checkStructureResponse = [];
                $n = 0;
                foreach ($map['CheckStructureResponse'] as $item) {
                    $model->checkStructureResponse[$n++] = null !== $item ? checkStructureResponse::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
