<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListExchangesResponseBody;

use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListExchangesResponseBody\data\exchanges;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var exchanges[]
     */
    public $exchanges;
    protected $_name = [
        'nextToken'  => 'NextToken',
        'maxResults' => 'MaxResults',
        'exchanges'  => 'Exchanges',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->exchanges) {
            $res['Exchanges'] = [];
            if (null !== $this->exchanges && \is_array($this->exchanges)) {
                $n = 0;
                foreach ($this->exchanges as $item) {
                    $res['Exchanges'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Exchanges'])) {
            if (!empty($map['Exchanges'])) {
                $model->exchanges = [];
                $n                = 0;
                foreach ($map['Exchanges'] as $item) {
                    $model->exchanges[$n++] = null !== $item ? exchanges::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
