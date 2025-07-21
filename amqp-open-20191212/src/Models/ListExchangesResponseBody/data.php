<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListExchangesResponseBody;

use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListExchangesResponseBody\data\exchanges;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The exchanges.
     *
     * @var exchanges[]
     */
    public $exchanges;

    /**
     * @description The maximum number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that marks the end of the current returned page.``
     *
     *   If the value of this parameter is empty, the next query is not required and the token used to start the next query is unavailable.``
     *   If the value of this parameter is not empty, the next query is required, and the value is the token used to start the next query.``
     *
     * @example AAAANDQBYW1xcC1jbi03cHAybXdiY3AwMGEBdmhvc3QBAXNkZndhYWJhATE2NDkzMTM4OTU5NDIB4o3z1pPwWzk4aYuiRffi8R6-****
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'exchanges' => 'Exchanges',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->exchanges) {
            $res['Exchanges'] = [];
            if (null !== $this->exchanges && \is_array($this->exchanges)) {
                $n = 0;
                foreach ($this->exchanges as $item) {
                    $res['Exchanges'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Exchanges'])) {
            if (!empty($map['Exchanges'])) {
                $model->exchanges = [];
                $n = 0;
                foreach ($map['Exchanges'] as $item) {
                    $model->exchanges[$n++] = null !== $item ? exchanges::fromMap($item) : $item;
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
