<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class Project extends Model
{
    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 最后更新时间
     *
     * @var string
     */
    public $lastModifyTime;

    /**
     * @description owner
     *
     * @var string
     */
    public $owner;

    /**
     * @description Project名称
     *
     * @var string
     */
    public $projectName;

    /**
     * @description 所在区域
     *
     * @var string
     */
    public $region;

    /**
     * @description 状态
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime'     => 'createTime',
        'description'    => 'description',
        'lastModifyTime' => 'lastModifyTime',
        'owner'          => 'owner',
        'projectName'    => 'projectName',
        'region'         => 'region',
        'status'         => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->lastModifyTime) {
            $res['lastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }
        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Project
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['lastModifyTime'])) {
            $model->lastModifyTime = $map['lastModifyTime'];
        }
        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }
        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
