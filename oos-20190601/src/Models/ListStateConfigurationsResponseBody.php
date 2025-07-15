<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\ListStateConfigurationsResponseBody\stateConfigurations;
use AlibabaCloud\Tea\Model;

class ListStateConfigurationsResponseBody extends Model
{
    /**
     * @description The pagination token that was used in the next request to retrieve a new page of results.
     *
     * @example AAAAASO3cL82+b5iji7bfPNpMh8=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 1306108F-610C-40FD-AAD5-DA13E8B00BE9
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the desired-state configurations.
     *
     * @var stateConfigurations[]
     */
    public $stateConfigurations;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'stateConfigurations' => 'StateConfigurations',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->stateConfigurations) {
            $res['StateConfigurations'] = [];
            if (null !== $this->stateConfigurations && \is_array($this->stateConfigurations)) {
                $n = 0;
                foreach ($this->stateConfigurations as $item) {
                    $res['StateConfigurations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStateConfigurationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StateConfigurations'])) {
            if (!empty($map['StateConfigurations'])) {
                $model->stateConfigurations = [];
                $n = 0;
                foreach ($map['StateConfigurations'] as $item) {
                    $model->stateConfigurations[$n++] = null !== $item ? stateConfigurations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
