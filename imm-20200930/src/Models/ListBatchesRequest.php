<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ListBatchesRequest extends Model
{
    /**
     * @description The maximum number of results to return. Valid values: 0 to 100.
     *
     * If you do not specify this parameter or set the parameter to 0, the default value of 100 is used.
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token.
     *
     * You do not need to specify this parameter in your initial request.
     * @example MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpwZw==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The sort order. Valid values:
     *
     *   ASC: sorts the results in ascending order. This is the default sort order.
     *   DES: sorts the results in descending order.
     *
     * @example ASC
     *
     * @var string
     */
    public $order;

    /**
     * @description The name of the project.[](~~478153~~)
     *
     * This parameter is required.
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The sort field. Valid values:
     *
     *   CreateTime
     *   UpdateTime
     *
     * @example 2020-11-11T06:51:17.5Z
     *
     * @var string
     */
    public $sort;

    /**
     * @description The task status.
     *
     *   Ready: The task is newly created and ready.
     *   Running: The task is running.
     *   Failed: The task failed and cannot be automatically recovered.
     *   Suspended: The task is suspended.
     *   Succeeded: The task is successful.
     *
     * @example Succeed
     *
     * @var string
     */
    public $state;

    /**
     * @description The custom tag. You can use this parameter to query tasks that have the specified tag.
     *
     * @example test=val1
     *
     * @var string
     */
    public $tagSelector;
    protected $_name = [
        'maxResults'  => 'MaxResults',
        'nextToken'   => 'NextToken',
        'order'       => 'Order',
        'projectName' => 'ProjectName',
        'sort'        => 'Sort',
        'state'       => 'State',
        'tagSelector' => 'TagSelector',
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
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->tagSelector) {
            $res['TagSelector'] = $this->tagSelector;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBatchesRequest
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
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['TagSelector'])) {
            $model->tagSelector = $map['TagSelector'];
        }

        return $model;
    }
}
