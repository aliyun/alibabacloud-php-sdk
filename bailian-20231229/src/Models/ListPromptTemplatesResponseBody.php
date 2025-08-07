<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListPromptTemplatesResponseBody\promptTemplates;

class ListPromptTemplatesResponseBody extends Model
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
     * @var promptTemplates[]
     */
    public $promptTemplates;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'promptTemplates' => 'promptTemplates',
        'requestId' => 'requestId',
        'totalCount' => 'totalCount',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->promptTemplates)) {
            Model::validateArray($this->promptTemplates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->promptTemplates) {
            if (\is_array($this->promptTemplates)) {
                $res['promptTemplates'] = [];
                $n1 = 0;
                foreach ($this->promptTemplates as $item1) {
                    $res['promptTemplates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['promptTemplates'])) {
            if (!empty($map['promptTemplates'])) {
                $model->promptTemplates = [];
                $n1 = 0;
                foreach ($map['promptTemplates'] as $item1) {
                    $model->promptTemplates[$n1] = promptTemplates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
