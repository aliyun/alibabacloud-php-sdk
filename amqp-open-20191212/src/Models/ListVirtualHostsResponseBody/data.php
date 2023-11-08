<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListVirtualHostsResponseBody;

use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListVirtualHostsResponseBody\data\virtualHosts;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example caebacccb2be03f84eb48b699f0a****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Vhost。
     *
     * @var virtualHosts[]
     */
    public $virtualHosts;
    protected $_name = [
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'virtualHosts' => 'VirtualHosts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->virtualHosts) {
            $res['VirtualHosts'] = [];
            if (null !== $this->virtualHosts && \is_array($this->virtualHosts)) {
                $n = 0;
                foreach ($this->virtualHosts as $item) {
                    $res['VirtualHosts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['VirtualHosts'])) {
            if (!empty($map['VirtualHosts'])) {
                $model->virtualHosts = [];
                $n                   = 0;
                foreach ($map['VirtualHosts'] as $item) {
                    $model->virtualHosts[$n++] = null !== $item ? virtualHosts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
