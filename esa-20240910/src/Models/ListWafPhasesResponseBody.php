<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafPhasesResponseBody\phases;
use AlibabaCloud\Tea\Model;

class ListWafPhasesResponseBody extends Model
{
    /**
     * @description The WAF rule categories.
     *
     * @var phases[]
     */
    public $phases;

    /**
     * @description The request ID.
     *
     * @example 36af3fcc-43d0-441c-86b1-428951dc8225
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'phases'    => 'Phases',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->phases) {
            $res['Phases'] = [];
            if (null !== $this->phases && \is_array($this->phases)) {
                $n = 0;
                foreach ($this->phases as $item) {
                    $res['Phases'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListWafPhasesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Phases'])) {
            if (!empty($map['Phases'])) {
                $model->phases = [];
                $n             = 0;
                foreach ($map['Phases'] as $item) {
                    $model->phases[$n++] = null !== $item ? phases::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
