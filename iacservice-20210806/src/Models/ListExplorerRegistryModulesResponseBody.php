<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListExplorerRegistryModulesResponseBody\explorerRegistryModules;

class ListExplorerRegistryModulesResponseBody extends Model
{
    /**
     * @var explorerRegistryModules[]
     */
    public $explorerRegistryModules;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'explorerRegistryModules' => 'explorerRegistryModules',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->explorerRegistryModules)) {
            Model::validateArray($this->explorerRegistryModules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->explorerRegistryModules) {
            if (\is_array($this->explorerRegistryModules)) {
                $res['explorerRegistryModules'] = [];
                $n1 = 0;
                foreach ($this->explorerRegistryModules as $item1) {
                    $res['explorerRegistryModules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['explorerRegistryModules'])) {
            if (!empty($map['explorerRegistryModules'])) {
                $model->explorerRegistryModules = [];
                $n1 = 0;
                foreach ($map['explorerRegistryModules'] as $item1) {
                    $model->explorerRegistryModules[$n1] = explorerRegistryModules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
