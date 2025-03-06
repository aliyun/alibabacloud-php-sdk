<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeClientsResponseBody;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeClientsResponseBody\clients\client;
use AlibabaCloud\Tea\Model;

class clients extends Model
{
    /**
     * @var client[]
     */
    public $client;
    protected $_name = [
        'client' => 'Client',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->client) {
            $res['Client'] = [];
            if (null !== $this->client && \is_array($this->client)) {
                $n = 0;
                foreach ($this->client as $item) {
                    $res['Client'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clients
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Client'])) {
            if (!empty($map['Client'])) {
                $model->client = [];
                $n             = 0;
                foreach ($map['Client'] as $item) {
                    $model->client[$n++] = null !== $item ? client::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
