<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCustomPortsResponseBody\webCustomPorts;
use AlibabaCloud\Tea\Model;

class DescribeWebCustomPortsResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array consisting of information about supported custom ports that are used by a website.
     *
     * @var webCustomPorts[]
     */
    public $webCustomPorts;
    protected $_name = [
        'requestId'      => 'RequestId',
        'webCustomPorts' => 'WebCustomPorts',
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
        if (null !== $this->webCustomPorts) {
            $res['WebCustomPorts'] = [];
            if (null !== $this->webCustomPorts && \is_array($this->webCustomPorts)) {
                $n = 0;
                foreach ($this->webCustomPorts as $item) {
                    $res['WebCustomPorts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWebCustomPortsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WebCustomPorts'])) {
            if (!empty($map['WebCustomPorts'])) {
                $model->webCustomPorts = [];
                $n                     = 0;
                foreach ($map['WebCustomPorts'] as $item) {
                    $model->webCustomPorts[$n++] = null !== $item ? webCustomPorts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
