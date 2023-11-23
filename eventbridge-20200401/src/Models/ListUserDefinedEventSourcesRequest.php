<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class ListUserDefinedEventSourcesRequest extends Model
{
    /**
     * @description The name of the event bus.
     *
     * @example testBus
     *
     * @var string
     */
    public $eventBusName;

    /**
     * @description The maximum number of entries to be returned in a call. You can use this parameter and NextToken to implement paging. Note: Up to 100 entries can be returned in a call.
     *
     * @example 50
     *
     * @var int
     */
    public $limit;

    /**
     * @description The name of the event source.
     *
     * @example testName
     *
     * @var string
     */
    public $namePrefix;

    /**
     * @description If you configure Limit and excess return values exist, this parameter is returned.
     *
     * @example 100
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'eventBusName' => 'EventBusName',
        'limit'        => 'Limit',
        'namePrefix'   => 'NamePrefix',
        'nextToken'    => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->namePrefix) {
            $res['NamePrefix'] = $this->namePrefix;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserDefinedEventSourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['NamePrefix'])) {
            $model->namePrefix = $map['NamePrefix'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
