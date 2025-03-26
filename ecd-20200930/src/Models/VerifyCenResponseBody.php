<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\VerifyCenResponseBody\routeEntries;

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
        'cidrBlocks' => 'CidrBlocks',
        'requestId' => 'RequestId',
        'routeEntries' => 'RouteEntries',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->cidrBlocks)) {
            Model::validateArray($this->cidrBlocks);
        }
        if (\is_array($this->routeEntries)) {
            Model::validateArray($this->routeEntries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidrBlocks) {
            if (\is_array($this->cidrBlocks)) {
                $res['CidrBlocks'] = [];
                $n1 = 0;
                foreach ($this->cidrBlocks as $item1) {
                    $res['CidrBlocks'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->routeEntries) {
            if (\is_array($this->routeEntries)) {
                $res['RouteEntries'] = [];
                $n1 = 0;
                foreach ($this->routeEntries as $item1) {
                    $res['RouteEntries'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrBlocks'])) {
            if (!empty($map['CidrBlocks'])) {
                $model->cidrBlocks = [];
                $n1 = 0;
                foreach ($map['CidrBlocks'] as $item1) {
                    $model->cidrBlocks[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RouteEntries'])) {
            if (!empty($map['RouteEntries'])) {
                $model->routeEntries = [];
                $n1 = 0;
                foreach ($map['RouteEntries'] as $item1) {
                    $model->routeEntries[$n1++] = routeEntries::fromMap($item1);
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
