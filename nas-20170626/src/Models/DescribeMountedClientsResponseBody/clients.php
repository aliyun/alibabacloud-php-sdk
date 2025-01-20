<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountedClientsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountedClientsResponseBody\clients\client;

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
        if (\is_array($this->client)) {
            Model::validateArray($this->client);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->client) {
            if (\is_array($this->client)) {
                $res['Client'] = [];
                $n1            = 0;
                foreach ($this->client as $item1) {
                    $res['Client'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Client'])) {
            if (!empty($map['Client'])) {
                $model->client = [];
                $n1            = 0;
                foreach ($map['Client'] as $item1) {
                    $model->client[$n1++] = client::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
