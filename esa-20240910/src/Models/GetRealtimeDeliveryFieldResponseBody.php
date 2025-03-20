<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetRealtimeDeliveryFieldResponseBody extends Model
{
    /**
     * @description The fields returned.
     *
     * @var FieldContentValue[]
     */
    public $fieldContent;

    /**
     * @description The request ID.
     *
     * @example 15C66C7B-671A-4297-9187-2C4477247B78
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fieldContent' => 'FieldContent',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldContent) {
            $res['FieldContent'] = [];
            if (null !== $this->fieldContent && \is_array($this->fieldContent)) {
                foreach ($this->fieldContent as $key => $val) {
                    $res['FieldContent'][$key] = null !== $val ? $val->toMap() : $val;
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
     * @return GetRealtimeDeliveryFieldResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FieldContent'])) {
            $model->fieldContent = $map['FieldContent'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
