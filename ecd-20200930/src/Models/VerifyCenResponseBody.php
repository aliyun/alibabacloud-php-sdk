<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\VerifyCenResponseBody\routeEntries;
use AlibabaCloud\Tea\Model;

class VerifyCenResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $cidrBlocks;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var routeEntries[]
     */
    public $routeEntries;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'cidrBlocks'   => 'CidrBlocks',
        'requestId'    => 'RequestId',
        'routeEntries' => 'RouteEntries',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrBlocks) {
            $res['CidrBlocks'] = $this->cidrBlocks;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->routeEntries) {
            $res['RouteEntries'] = [];
            if (null !== $this->routeEntries && \is_array($this->routeEntries)) {
                $n = 0;
                foreach ($this->routeEntries as $item) {
                    $res['RouteEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyCenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrBlocks'])) {
            if (!empty($map['CidrBlocks'])) {
                $model->cidrBlocks = $map['CidrBlocks'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RouteEntries'])) {
            if (!empty($map['RouteEntries'])) {
                $model->routeEntries = [];
                $n                   = 0;
                foreach ($map['RouteEntries'] as $item) {
                    $model->routeEntries[$n++] = null !== $item ? routeEntries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
