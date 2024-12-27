<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ListTriggersRequest extends Model
{
    /**
     * @description The maximum number of entries to return. Valid values: 0 to 100.
     *
     * Default value: 100.
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * You do not need to specify this parameter for the first request.
     * @example MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpwZw==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The sort order. Default value: DESC.
     *
     *   ASC (default): ascending order.
     *   DESC: descending order.
     *
     * @example ASC
     *
     * @var string
     */
    public $order;

    /**
     * @description The name of the project. You can obtain the name of the project from the response of the [CreateProject](https://help.aliyun.com/document_detail/478153.html) operation.
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
     *   CreateTime: the point in time when the trigger is created.
     *   UpdateTime: the most recent point in time when the trigger is updated.
     *
     * @example 2020-11-11T06:51:17.5Z
     *
     * @var string
     */
    public $sort;

    /**
     * @description The status of the trigger. Valid values:
     *
     *   Ready: The trigger is ready.
     *   Running: The trigger is running.
     *   Failed: The trigger failed and cannot be automatically recovered.
     *   Suspended: The trigger is suspended.
     *   Succeeded: The trigger is complete.
     *
     * @example Succeeded
     *
     * @var string
     */
    public $state;

    /**
     * @description The custom tag. You can specify this parameter only if you specified Tags when you called the CreateTrigger operation.
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
     * @return ListTriggersRequest
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
