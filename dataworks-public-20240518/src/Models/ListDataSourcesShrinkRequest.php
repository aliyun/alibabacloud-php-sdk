<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListDataSourcesShrinkRequest extends Model
{
    /**
     * @description The environment in which the data sources are used. Valid values:
     *
     *   Dev: development environment
     *   Prod: production environment
     *
     * @example Prod
     *
     * @var string
     */
    public $envType;

    /**
     * @description The name of the data source. Fuzzy match by data source name is supported.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The order in which you want to sort the data sources. Valid values:
     *
     *   Desc: descending order
     *   Asc: ascending order
     *
     * Default value: Asc
     * @example Asc
     *
     * @var string
     */
    public $order;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 10. Maximum value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The DataWorks workspace ID. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace page to query the ID.
     *
     * This parameter is required.
     * @example 17820
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The field that you want to use to sort the data sources. Valid values:
     *
     *   CreateTime
     *   Id
     *   Name
     *
     * Default value: Id
     * @example Id
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The tag of the data source. This parameter specifies a filter condition.
     *
     *   You can specify multiple tags, which are in the logical AND relation. For example, you can query the data sources that contain the following tags: `["tag1", "tag2", "tag3"]`.
     *   If you do not configure this parameter, tag-based filtering is not performed.
     *
     * @example ["tag1", "tag2", "tag3"]
     *
     * @var string
     */
    public $tags;

    /**
     * @description The data source types. This parameter specifies a filter condition. You can specify multiple data source types.
     *
     * @var string
     */
    public $typesShrink;
    protected $_name = [
        'envType'     => 'EnvType',
        'name'        => 'Name',
        'order'       => 'Order',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'projectId'   => 'ProjectId',
        'sortBy'      => 'SortBy',
        'tags'        => 'Tags',
        'typesShrink' => 'Types',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->typesShrink) {
            $res['Types'] = $this->typesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataSourcesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Types'])) {
            $model->typesShrink = $map['Types'];
        }

        return $model;
    }
}
