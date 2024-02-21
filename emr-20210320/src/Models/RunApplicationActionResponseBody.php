<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\SDK\Emr\V20210320\Models\RunApplicationActionResponseBody\abnInstances;
use AlibabaCloud\Tea\Model;

class RunApplicationActionResponseBody extends Model
{
    /**
     * @description The abnormal nodes.
     *
     * @var abnInstances[]
     */
    public $abnInstances;

    /**
     * @description The operation ID.
     *
     * @example op-13c37a77c505****
     *
     * @var string
     */
    public $operationId;

    /**
     * @description The request ID.
     *
     * @example 9E3A7161-EB7B-172B-8D18-FFB06BA3****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'abnInstances' => 'AbnInstances',
        'operationId'  => 'OperationId',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abnInstances) {
            $res['AbnInstances'] = [];
            if (null !== $this->abnInstances && \is_array($this->abnInstances)) {
                $n = 0;
                foreach ($this->abnInstances as $item) {
                    $res['AbnInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunApplicationActionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbnInstances'])) {
            if (!empty($map['AbnInstances'])) {
                $model->abnInstances = [];
                $n                   = 0;
                foreach ($map['AbnInstances'] as $item) {
                    $model->abnInstances[$n++] = null !== $item ? abnInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
