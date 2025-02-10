<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeIspFlushCacheTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeIspFlushCacheTaskResponseBody\flushCacheResults\dnsNodes;

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
        if (\is_array($this->dnsNodes)) {
            Model::validateArray($this->dnsNodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dnsNodes) {
            if (\is_array($this->dnsNodes)) {
                $res['DnsNodes'] = [];
                $n1              = 0;
                foreach ($this->dnsNodes as $item1) {
                    $res['DnsNodes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->province) {
            $res['Province'] = $this->province;
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
        if (isset($map['DnsNodes'])) {
            if (!empty($map['DnsNodes'])) {
                $model->dnsNodes = [];
                $n1              = 0;
                foreach ($map['DnsNodes'] as $item1) {
                    $model->dnsNodes[$n1++] = dnsNodes::fromMap($item1);
                }
            }
        }

        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
