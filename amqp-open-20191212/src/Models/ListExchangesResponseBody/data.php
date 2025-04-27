<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListExchangesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListExchangesResponseBody\data\exchanges;

class data extends Model
{
    /**
     * @var exchanges[]
     */
    public $exchanges;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'exchanges' => 'Exchanges',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
    ];

    public function validate()
    {
        if (\is_array($this->exchanges)) {
            Model::validateArray($this->exchanges);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exchanges) {
            if (\is_array($this->exchanges)) {
                $res['Exchanges'] = [];
                $n1 = 0;
                foreach ($this->exchanges as $item1) {
                    $res['Exchanges'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['Exchanges'])) {
            if (!empty($map['Exchanges'])) {
                $model->exchanges = [];
                $n1 = 0;
                foreach ($map['Exchanges'] as $item1) {
                    $model->exchanges[$n1++] = exchanges::fromMap($item1);
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
