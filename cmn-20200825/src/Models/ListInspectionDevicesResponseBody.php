<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListInspectionDevicesResponseBody\inspectionScripts;
use AlibabaCloud\Tea\Model;

class ListInspectionDevicesResponseBody extends Model
{
    /**
     * @description content
     *
     * @var inspectionScripts[]
     */
    public $inspectionScripts;

    /**
     * @description Id of the request
     *
     * @example B24B378C-6025-58E2-A1A5-A5E4FBBF2D64
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'inspectionScripts' => 'InspectionScripts',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inspectionScripts) {
            $res['InspectionScripts'] = [];
            if (null !== $this->inspectionScripts && \is_array($this->inspectionScripts)) {
                $n = 0;
                foreach ($this->inspectionScripts as $item) {
                    $res['InspectionScripts'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListInspectionDevicesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InspectionScripts'])) {
            if (!empty($map['InspectionScripts'])) {
                $model->inspectionScripts = [];
                $n                        = 0;
                foreach ($map['InspectionScripts'] as $item) {
                    $model->inspectionScripts[$n++] = null !== $item ? inspectionScripts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
