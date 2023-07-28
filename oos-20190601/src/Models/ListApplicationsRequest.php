<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class ListApplicationsRequest extends Model
{
    /**
     * @description The type of the application.
     *
     * @example DingTalk
     *
     * @var string
     */
    public $applicationType;

    /**
     * @description The number of entries to return on each page. Valid values: 10 to 100. Default value: 50.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The name of the application.
     *
     * @example "MyApplications"
     *
     * @var string
     */
    public $name;

    /**
     * @description The names of the applications.
     *
     * @example ["MyApplication"]
     *
     * @var string
     */
    public $names;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * @example -
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The region ID. Set the value to cn-hangzhou.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The tags.
     *
     * @example {"k1": "v1","k2": "v2"}
     *
     * @var mixed[]
     */
    public $tags;
    protected $_name = [
        'applicationType' => 'ApplicationType',
        'maxResults'      => 'MaxResults',
        'name'            => 'Name',
        'names'           => 'Names',
        'nextToken'       => 'NextToken',
        'regionId'        => 'RegionId',
        'tags'            => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->names) {
            $res['Names'] = $this->names;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApplicationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Names'])) {
            $model->names = $map['Names'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
