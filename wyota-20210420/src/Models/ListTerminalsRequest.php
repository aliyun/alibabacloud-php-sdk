<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class ListTerminalsRequest extends Model
{
    /**
     * @example 200
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example AAAAAdEdsXbwG2ZlbWCzN4wTTg6wQvfp7u1BJl4bxCAby41POSaYAlCvfULQpkAnb0ff****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example DemoDevice
     *
     * @var string
     */
    public $searchKeyword;

    /**
     * @example tg-default
     *
     * @var string
     */
    public $terminalGroupId;
    protected $_name = [
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'searchKeyword'   => 'SearchKeyword',
        'terminalGroupId' => 'TerminalGroupId',
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
        if (null !== $this->searchKeyword) {
            $res['SearchKeyword'] = $this->searchKeyword;
        }
        if (null !== $this->terminalGroupId) {
            $res['TerminalGroupId'] = $this->terminalGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTerminalsRequest
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
        if (isset($map['SearchKeyword'])) {
            $model->searchKeyword = $map['SearchKeyword'];
        }
        if (isset($map['TerminalGroupId'])) {
            $model->terminalGroupId = $map['TerminalGroupId'];
        }

        return $model;
    }
}
