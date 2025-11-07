<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListPatchBaselinesResponseBody\patchBaselines;

class ListPatchBaselinesResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var patchBaselines[]
     */
    public $patchBaselines;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'patchBaselines' => 'PatchBaselines',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->patchBaselines)) {
            Model::validateArray($this->patchBaselines);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->patchBaselines) {
            if (\is_array($this->patchBaselines)) {
                $res['PatchBaselines'] = [];
                $n1 = 0;
                foreach ($this->patchBaselines as $item1) {
                    $res['PatchBaselines'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PatchBaselines'])) {
            if (!empty($map['PatchBaselines'])) {
                $model->patchBaselines = [];
                $n1 = 0;
                foreach ($map['PatchBaselines'] as $item1) {
                    $model->patchBaselines[$n1] = patchBaselines::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
