<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetActivityListResponseBody\result;
use AlibabaCloud\Tea\Model;

class GetActivityListResponseBody extends Model
{
    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @var result[]
     */
    public $result;

    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $vendorRequestId;

    /**
     * @example dingtalk
     *
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'requestId'       => 'requestId',
        'result'          => 'result',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType'      => 'vendorType',
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
            $res['result'] = [];
            if (null !== $this->result && \is_array($this->result)) {
                $n = 0;
                foreach ($this->result as $item) {
                    $res['result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }
        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetActivityListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }
        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
