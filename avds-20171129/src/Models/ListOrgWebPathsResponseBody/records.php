<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models\ListOrgWebPathsResponseBody;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var int
     */
    public $orgId;

    /**
     * @var string
     */
    public $site;

    /**
     * @var string
     */
    public $path;

    /**
     * @var int
     */
    public $updatedAt;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'index'     => 'Index',
        'orgId'     => 'OrgId',
        'site'      => 'Site',
        'path'      => 'Path',
        'updatedAt' => 'UpdatedAt',
        'id'        => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->site) {
            $res['Site'] = $this->site;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['Site'])) {
            $model->site = $map['Site'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
