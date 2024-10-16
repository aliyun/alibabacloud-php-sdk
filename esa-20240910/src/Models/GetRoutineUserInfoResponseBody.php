<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineUserInfoResponseBody\routines;
use AlibabaCloud\Tea\Model;

class GetRoutineUserInfoResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var routines[]
     */
    public $routines;

    /**
     * @var string[]
     */
    public $subdomains;
    protected $_name = [
        'requestId'  => 'RequestId',
        'routines'   => 'Routines',
        'subdomains' => 'Subdomains',
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
        if (null !== $this->routines) {
            $res['Routines'] = [];
            if (null !== $this->routines && \is_array($this->routines)) {
                $n = 0;
                foreach ($this->routines as $item) {
                    $res['Routines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->subdomains) {
            $res['Subdomains'] = $this->subdomains;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRoutineUserInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Routines'])) {
            if (!empty($map['Routines'])) {
                $model->routines = [];
                $n               = 0;
                foreach ($map['Routines'] as $item) {
                    $model->routines[$n++] = null !== $item ? routines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Subdomains'])) {
            if (!empty($map['Subdomains'])) {
                $model->subdomains = $map['Subdomains'];
            }
        }

        return $model;
    }
}
