<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class PublishServiceVersionResponseBody extends Model
{
    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description 版本描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 上次更新时间
     *
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @description 版本ID
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'createdTime'      => 'createdTime',
        'description'      => 'description',
        'lastModifiedTime' => 'lastModifiedTime',
        'versionId'        => 'versionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->lastModifiedTime) {
            $res['lastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->versionId) {
            $res['versionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PublishServiceVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['lastModifiedTime'])) {
            $model->lastModifiedTime = $map['lastModifiedTime'];
        }
        if (isset($map['versionId'])) {
            $model->versionId = $map['versionId'];
        }

        return $model;
    }
}
