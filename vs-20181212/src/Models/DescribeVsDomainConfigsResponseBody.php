<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainConfigsResponseBody\domainConfigs;
use AlibabaCloud\Tea\Model;

class DescribeVsDomainConfigsResponseBody extends Model
{
    /**
     * @var domainConfigs[]
     */
    public $domainConfigs;

    /**
     * @example D94D0E1E-E71B-562D-8C18-969BB3653FBD
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainConfigs' => 'DomainConfigs',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainConfigs) {
            $res['DomainConfigs'] = [];
            if (null !== $this->domainConfigs && \is_array($this->domainConfigs)) {
                $n = 0;
                foreach ($this->domainConfigs as $item) {
                    $res['DomainConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeVsDomainConfigsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainConfigs'])) {
            if (!empty($map['DomainConfigs'])) {
                $model->domainConfigs = [];
                $n = 0;
                foreach ($map['DomainConfigs'] as $item) {
                    $model->domainConfigs[$n++] = null !== $item ? domainConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
