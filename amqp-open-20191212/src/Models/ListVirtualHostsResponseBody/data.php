<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListVirtualHostsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListVirtualHostsResponseBody\data\virtualHosts;

class data extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var virtualHosts[]
     */
    public $virtualHosts;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'virtualHosts' => 'VirtualHosts',
    ];

    public function validate()
    {
        if (\is_array($this->virtualHosts)) {
            Model::validateArray($this->virtualHosts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->virtualHosts) {
            if (\is_array($this->virtualHosts)) {
                $res['VirtualHosts'] = [];
                $n1 = 0;
                foreach ($this->virtualHosts as $item1) {
                    $res['VirtualHosts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['VirtualHosts'])) {
            if (!empty($map['VirtualHosts'])) {
                $model->virtualHosts = [];
                $n1 = 0;
                foreach ($map['VirtualHosts'] as $item1) {
                    $model->virtualHosts[$n1++] = virtualHosts::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
