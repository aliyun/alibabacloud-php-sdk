<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models\ListServiceVersionsResponseBody;

use AlibabaCloud\Tea\Model;

class versions extends Model
{
    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $lastModifiedTime;

    /**
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
     * @return versions
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
