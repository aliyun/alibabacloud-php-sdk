<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models\ListInstancesV2ResponseBody\instances;

use AlibabaCloud\Tea\Model;

class latestSnapshot extends Model
{
    /**
     * @description 快照创建时间
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @description 快照修改时间
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @description 镜像Id
     *
     * @var string
     */
    public $imageId;

    /**
     * @description 镜像名称
     *
     * @var string
     */
    public $imageName;

    /**
     * @description 镜像Url
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @description 镜像仓库Url
     *
     * @var string
     */
    public $repositoryUrl;
    protected $_name = [
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'imageId'         => 'ImageId',
        'imageName'       => 'ImageName',
        'imageUrl'        => 'ImageUrl',
        'repositoryUrl'   => 'RepositoryUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->repositoryUrl) {
            $res['RepositoryUrl'] = $this->repositoryUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return latestSnapshot
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['RepositoryUrl'])) {
            $model->repositoryUrl = $map['RepositoryUrl'];
        }

        return $model;
    }
}
