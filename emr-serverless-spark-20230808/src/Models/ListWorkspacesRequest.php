<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Tea\Model;

class ListWorkspacesRequest extends Model
{
    /**
     * @description The maximum number of entries to return.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description Fuzzy match is supported.
     *
     * @example test_workspace
     *
     * @var string
     */
    public $name;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * @example 1
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The workspace status.
     *
     * @example running
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'maxResults' => 'maxResults',
        'name'       => 'name',
        'nextToken'  => 'nextToken',
        'regionId'   => 'regionId',
        'state'      => 'state',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWorkspacesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        return $model;
    }
}
