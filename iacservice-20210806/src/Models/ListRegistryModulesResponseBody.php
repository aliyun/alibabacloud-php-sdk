<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListRegistryModulesResponseBody\registryModules;

class ListRegistryModulesResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var registryModules[]
     */
    public $registryModules;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'count' => 'count',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'registryModules' => 'registryModules',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->registryModules)) {
            Model::validateArray($this->registryModules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->registryModules) {
            if (\is_array($this->registryModules)) {
                $res['registryModules'] = [];
                $n1 = 0;
                foreach ($this->registryModules as $item1) {
                    $res['registryModules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['registryModules'])) {
            if (!empty($map['registryModules'])) {
                $model->registryModules = [];
                $n1 = 0;
                foreach ($map['registryModules'] as $item1) {
                    $model->registryModules[$n1] = registryModules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
