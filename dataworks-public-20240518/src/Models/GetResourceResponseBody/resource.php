<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetResourceResponseBody;

use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description The time when the file resource was created. This value is a UNIX timestamp.
     *
     * @example 1700539206000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the file resource.
     *
     * @example 860438872620113XXXX
     *
     * @var int
     */
    public $id;

    /**
     * @description The time when the file resource was last modified. This value is a UNIX timestamp.
     *
     * @example 1700539206000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @description The name of the file resource.
     *
     * @var string
     */
    public $name;

    /**
     * @description The owner of the file resource.
     *
     * @example 110755000425XXXX
     *
     * @var string
     */
    public $owner;

    /**
     * @description The ID of the workspace to which the file resource belongs.
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The FlowSpec field information about the file resource. For more information, see [FlowSpec](https://github.com/aliyun/alibabacloud-dataworks-tool-dflow).
     *
     * @var string
     */
    public $spec;
    protected $_name = [
        'createTime' => 'CreateTime',
        'id'         => 'Id',
        'modifyTime' => 'ModifyTime',
        'name'       => 'Name',
        'owner'      => 'Owner',
        'projectId'  => 'ProjectId',
        'spec'       => 'Spec',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        return $model;
    }
}
