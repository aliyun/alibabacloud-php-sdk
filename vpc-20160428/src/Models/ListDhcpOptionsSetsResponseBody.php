<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListDhcpOptionsSetsResponseBody\dhcpOptionsSets;
use AlibabaCloud\Tea\Model;

class ListDhcpOptionsSetsResponseBody extends Model
{
    /**
     * @var dhcpOptionsSets[]
     */
    public $dhcpOptionsSets;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dhcpOptionsSets' => 'DhcpOptionsSets',
        'nextToken'       => 'NextToken',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dhcpOptionsSets) {
            $res['DhcpOptionsSets'] = [];
            if (null !== $this->dhcpOptionsSets && \is_array($this->dhcpOptionsSets)) {
                $n = 0;
                foreach ($this->dhcpOptionsSets as $item) {
                    $res['DhcpOptionsSets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDhcpOptionsSetsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DhcpOptionsSets'])) {
            if (!empty($map['DhcpOptionsSets'])) {
                $model->dhcpOptionsSets = [];
                $n                      = 0;
                foreach ($map['DhcpOptionsSets'] as $item) {
                    $model->dhcpOptionsSets[$n++] = null !== $item ? dhcpOptionsSets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
