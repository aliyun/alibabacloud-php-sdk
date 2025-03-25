<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\SDK\Bailian\V20231229\Models\ListPromptTemplatesResponseBody\promptTemplates;
use AlibabaCloud\Tea\Model;

class ListPromptTemplatesResponseBody extends Model
{
    /**
     * @description The maximum number of returned entries.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that determines the start position of the next query.
     *
     * @example dc270401186b433f975d7e1faaa34e0e
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The templates.
     *
     * @var promptTemplates[]
     */
    public $promptTemplates;

    /**
     * @description The request ID.
     *
     * @example FE9B6CBF-47E6-5D76-9C5D-B814DD5AB071
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 15
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The workspace ID.
     *
     * @example llm-us9hjmt32nysdxxx
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->promptTemplates) {
            $res['promptTemplates'] = [];
            if (null !== $this->promptTemplates && \is_array($this->promptTemplates)) {
                $n = 0;
                foreach ($this->promptTemplates as $item) {
                    $res['promptTemplates'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ListPromptTemplatesResponseBody
     */
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
                $n = 0;
                foreach ($map['promptTemplates'] as $item) {
                    $model->promptTemplates[$n++] = null !== $item ? promptTemplates::fromMap($item) : $item;
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
