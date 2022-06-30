<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebAccessModeResponseBody\domainModes;
use AlibabaCloud\Tea\Model;

class DescribeWebAccessModeResponseBody extends Model
{
    /**
     * @var domainModes[]
     */
    public $domainModes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainModes' => 'DomainModes',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainModes) {
            $res['DomainModes'] = [];
            if (null !== $this->domainModes && \is_array($this->domainModes)) {
                $n = 0;
                foreach ($this->domainModes as $item) {
                    $res['DomainModes'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeWebAccessModeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainModes'])) {
            if (!empty($map['DomainModes'])) {
                $model->domainModes = [];
                $n                  = 0;
                foreach ($map['DomainModes'] as $item) {
                    $model->domainModes[$n++] = null !== $item ? domainModes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
