<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qianzhou\V20211111\Models\ListClusterImagesResponseBody\datas;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $controllerName;

    /**
     * @var string
     */
    public $controllerType;

    /**
     * @var string
     */
    public $created;

    /**
     * @var string
     */
    public $imageHash;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var string
     */
    public $updated;
    protected $_name = [
        'clusterId'      => 'cluster_id',
        'controllerName' => 'controller_name',
        'controllerType' => 'controller_type',
        'created'        => 'created',
        'imageHash'      => 'image_hash',
        'imageName'      => 'image_name',
        'namespace'      => 'namespace',
        'uid'            => 'uid',
        'updated'        => 'updated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }
        if (null !== $this->controllerName) {
            $res['controller_name'] = $this->controllerName;
        }
        if (null !== $this->controllerType) {
            $res['controller_type'] = $this->controllerType;
        }
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->imageHash) {
            $res['image_hash'] = $this->imageHash;
        }
        if (null !== $this->imageName) {
            $res['image_name'] = $this->imageName;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['controller_name'])) {
            $model->controllerName = $map['controller_name'];
        }
        if (isset($map['controller_type'])) {
            $model->controllerType = $map['controller_type'];
        }
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['image_hash'])) {
            $model->imageHash = $map['image_hash'];
        }
        if (isset($map['image_name'])) {
            $model->imageName = $map['image_name'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}
