<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeIspFlushCacheTaskResponseBody;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeIspFlushCacheTaskResponseBody\flushCacheResults\dnsNodes;
use AlibabaCloud\Tea\Model;

class flushCacheResults extends Model
{
    /**
     * @var dnsNodes[]
     */
    public $dnsNodes;

    /**
     * @var string
     */
    public $province;
    protected $_name = [
        'dnsNodes' => 'DnsNodes',
        'province' => 'Province',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dnsNodes) {
            $res['DnsNodes'] = [];
            if (null !== $this->dnsNodes && \is_array($this->dnsNodes)) {
                $n = 0;
                foreach ($this->dnsNodes as $item) {
                    $res['DnsNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flushCacheResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DnsNodes'])) {
            if (!empty($map['DnsNodes'])) {
                $model->dnsNodes = [];
                $n               = 0;
                foreach ($map['DnsNodes'] as $item) {
                    $model->dnsNodes[$n++] = null !== $item ? dnsNodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
