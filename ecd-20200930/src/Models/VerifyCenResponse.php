<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\VerifyCenResponse\routeEntries;
use AlibabaCloud\Tea\Model;

class VerifyCenResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var routeEntries[]
     */
    public $routeEntries;

    /**
     * @var string[]
     */
    public $cidrBlocks;
    protected $_name = [
        'requestId'    => 'RequestId',
        'status'       => 'Status',
        'routeEntries' => 'RouteEntries',
        'cidrBlocks'   => 'CidrBlocks',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('routeEntries', $this->routeEntries, true);
        Model::validateRequired('cidrBlocks', $this->cidrBlocks, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (null !== $this->cidrBlocks) {
            $res['CidrBlocks'] = $this->cidrBlocks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyCenResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['CidrBlocks'])) {
            if (!empty($map['CidrBlocks'])) {
                $model->cidrBlocks = $map['CidrBlocks'];
            }
        }

        return $model;
    }
}
