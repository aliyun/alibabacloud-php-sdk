<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateRemediationsResponseBody\remediations;
use AlibabaCloud\Tea\Model;

class ListAggregateRemediationsResponseBody extends Model
{
    /**
     * @description An array that contains remediation templates.
     *
     * @var remediations[]
     */
    public $remediations;

    /**
     * @description The request ID.
     *
     * @example 0146963A-20C0-4E75-B93A-7D622B5FD7C8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'remediations' => 'Remediations',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remediations) {
            $res['Remediations'] = [];
            if (null !== $this->remediations && \is_array($this->remediations)) {
                $n = 0;
                foreach ($this->remediations as $item) {
                    $res['Remediations'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListAggregateRemediationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Remediations'])) {
            if (!empty($map['Remediations'])) {
                $model->remediations = [];
                $n                   = 0;
                foreach ($map['Remediations'] as $item) {
                    $model->remediations[$n++] = null !== $item ? remediations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
