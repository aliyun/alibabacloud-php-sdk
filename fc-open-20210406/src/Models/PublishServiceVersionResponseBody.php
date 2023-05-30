<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class PublishServiceVersionResponseBody extends Model
{
    /**
     * @description The returned data.
     *
     * @example 2016-08-15T16:06:05.000+0000
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The creation time.
     *
     * @example test_description
     *
     * @var string
     */
    public $description;

    /**
     * @description The description of the service version.
     *
     * @example 2016-08-15T16:06:05.000+0000
     *
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @description The last update time.
     *
     * @example 1
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
