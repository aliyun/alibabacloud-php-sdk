<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetUmodelDataResponseBody\errors;

class GetUmodelDataResponseBody extends Model
{
    /**
     * @var errors[]
     */
    public $errors;

    /**
     * @var mixed[]
     */
    public $links;

    /**
     * @var mixed[]
     */
    public $nodes;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalLinksCount;

    /**
     * @var int
     */
    public $totalNodesCount;
    protected $_name = [
        'errors' => 'errors',
        'links' => 'links',
        'nodes' => 'nodes',
        'requestId' => 'requestId',
        'totalLinksCount' => 'totalLinksCount',
        'totalNodesCount' => 'totalNodesCount',
    ];

    public function validate()
    {
        if (\is_array($this->errors)) {
            Model::validateArray($this->errors);
        }
        if (\is_array($this->links)) {
            Model::validateArray($this->links);
        }
        if (\is_array($this->nodes)) {
            Model::validateArray($this->nodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errors) {
            if (\is_array($this->errors)) {
                $res['errors'] = [];
                $n1 = 0;
                foreach ($this->errors as $item1) {
                    $res['errors'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->links) {
            if (\is_array($this->links)) {
                $res['links'] = [];
                $n1 = 0;
                foreach ($this->links as $item1) {
                    $res['links'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nodes) {
            if (\is_array($this->nodes)) {
                $res['nodes'] = [];
                $n1 = 0;
                foreach ($this->nodes as $item1) {
                    $res['nodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->totalLinksCount) {
            $res['totalLinksCount'] = $this->totalLinksCount;
        }

        if (null !== $this->totalNodesCount) {
            $res['totalNodesCount'] = $this->totalNodesCount;
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
        if (isset($map['errors'])) {
            if (!empty($map['errors'])) {
                $model->errors = [];
                $n1 = 0;
                foreach ($map['errors'] as $item1) {
                    $model->errors[$n1] = errors::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['links'])) {
            if (!empty($map['links'])) {
                $model->links = [];
                $n1 = 0;
                foreach ($map['links'] as $item1) {
                    $model->links[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['nodes'])) {
            if (!empty($map['nodes'])) {
                $model->nodes = [];
                $n1 = 0;
                foreach ($map['nodes'] as $item1) {
                    $model->nodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['totalLinksCount'])) {
            $model->totalLinksCount = $map['totalLinksCount'];
        }

        if (isset($map['totalNodesCount'])) {
            $model->totalNodesCount = $map['totalNodesCount'];
        }

        return $model;
    }
}
