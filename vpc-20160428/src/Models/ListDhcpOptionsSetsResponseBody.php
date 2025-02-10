<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListDhcpOptionsSetsResponseBody\dhcpOptionsSets;

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
    /**
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'dhcpOptionsSets' => 'DhcpOptionsSets',
        'nextToken'       => 'NextToken',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->dhcpOptionsSets)) {
            Model::validateArray($this->dhcpOptionsSets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dhcpOptionsSets) {
            if (\is_array($this->dhcpOptionsSets)) {
                $res['DhcpOptionsSets'] = [];
                $n1                     = 0;
                foreach ($this->dhcpOptionsSets as $item1) {
                    $res['DhcpOptionsSets'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['DhcpOptionsSets'])) {
            if (!empty($map['DhcpOptionsSets'])) {
                $model->dhcpOptionsSets = [];
                $n1                     = 0;
                foreach ($map['DhcpOptionsSets'] as $item1) {
                    $model->dhcpOptionsSets[$n1++] = dhcpOptionsSets::fromMap($item1);
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
