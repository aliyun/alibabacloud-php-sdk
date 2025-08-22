<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListExplorerRegistryModuleVersionsResponseBody\explorerRegistryModuleVersions;

class ListExplorerRegistryModuleVersionsResponseBody extends Model
{
    /**
     * @var explorerRegistryModuleVersions[]
     */
    public $explorerRegistryModuleVersions;

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
        'explorerRegistryModuleVersions' => 'explorerRegistryModuleVersions',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->explorerRegistryModuleVersions)) {
            Model::validateArray($this->explorerRegistryModuleVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->explorerRegistryModuleVersions) {
            if (\is_array($this->explorerRegistryModuleVersions)) {
                $res['explorerRegistryModuleVersions'] = [];
                $n1 = 0;
                foreach ($this->explorerRegistryModuleVersions as $item1) {
                    $res['explorerRegistryModuleVersions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['explorerRegistryModuleVersions'])) {
            if (!empty($map['explorerRegistryModuleVersions'])) {
                $model->explorerRegistryModuleVersions = [];
                $n1 = 0;
                foreach ($map['explorerRegistryModuleVersions'] as $item1) {
                    $model->explorerRegistryModuleVersions[$n1] = explorerRegistryModuleVersions::fromMap($item1);
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
