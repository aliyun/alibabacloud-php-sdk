<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeCnameReusesResponseBody\cnameReuses;
use AlibabaCloud\Tea\Model;

class DescribeCnameReusesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var cnameReuses[]
     */
    public $cnameReuses;
    protected $_name = [
        'requestId'   => 'RequestId',
        'cnameReuses' => 'CnameReuses',
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
        if (null !== $this->cnameReuses) {
            $res['CnameReuses'] = [];
            if (null !== $this->cnameReuses && \is_array($this->cnameReuses)) {
                $n = 0;
                foreach ($this->cnameReuses as $item) {
                    $res['CnameReuses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCnameReusesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CnameReuses'])) {
            if (!empty($map['CnameReuses'])) {
                $model->cnameReuses = [];
                $n                  = 0;
                foreach ($map['CnameReuses'] as $item) {
                    $model->cnameReuses[$n++] = null !== $item ? cnameReuses::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
