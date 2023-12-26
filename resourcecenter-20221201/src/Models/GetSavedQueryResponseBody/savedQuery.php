<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetSavedQueryResponseBody;

use AlibabaCloud\Tea\Model;

class savedQuery extends Model
{
    /**
     * @description The time when the template was created.
     *
     * @example 2023-10-30T01:43:16Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the template.
     *
     * @example Queries all resources on which you have permissions and sorts the resources by resource type and resource ID.
     *
     * @var string
     */
    public $description;

    /**
     * @description The query statement in the template.
     *
     * @example SELECT * FROM resources;
     *
     * @var string
     */
    public $expression;

    /**
     * @description The name of the template.
     *
     * @example Query of All Alibaba Cloud Resources
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the template.
     *
     * @example sq-GeAck****
     *
     * @var string
     */
    public $queryId;

    /**
     * @description The time when the template was last updated.
     *
     * @example 2023-10-30T01:43:16Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'  => 'CreateTime',
        'description' => 'Description',
        'expression'  => 'Expression',
        'name'        => 'Name',
        'queryId'     => 'QueryId',
        'updateTime'  => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->queryId) {
            $res['QueryId'] = $this->queryId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return savedQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['QueryId'])) {
            $model->queryId = $map['QueryId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
