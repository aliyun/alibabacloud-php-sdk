<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models\ListContainerImagesResponseBody;

use AlibabaCloud\Tea\Model;

class containerImages extends Model
{
    /**
     * @description 容器镜像描述
     *
     * @var string
     */
    public $containerImageDescription;

    /**
     * @description 容器镜像名称
     *
     * @var string
     */
    public $containerImageName;

    /**
     * @description 容器镜像名称空间名称
     *
     * @var string
     */
    public $containerImageNamespace;

    /**
     * @description 容器镜像版本
     *
     * @var string[]
     */
    public $containerImageVersions;

    /**
     * @description 容器镜像仓库名称
     *
     * @var string
     */
    public $containerRegistry;

    /**
     * @description 最后更新时间
     *
     * @var string
     */
    public $lastModified;

    /**
     * @description 容器镜像所在区域
     *
     * @var string
     */
    public $location;
    protected $_name = [
        'containerImageDescription' => 'ContainerImageDescription',
        'containerImageName'        => 'ContainerImageName',
        'containerImageNamespace'   => 'ContainerImageNamespace',
        'containerImageVersions'    => 'ContainerImageVersions',
        'containerRegistry'         => 'ContainerRegistry',
        'lastModified'              => 'LastModified',
        'location'                  => 'Location',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerImageDescription) {
            $res['ContainerImageDescription'] = $this->containerImageDescription;
        }
        if (null !== $this->containerImageName) {
            $res['ContainerImageName'] = $this->containerImageName;
        }
        if (null !== $this->containerImageNamespace) {
            $res['ContainerImageNamespace'] = $this->containerImageNamespace;
        }
        if (null !== $this->containerImageVersions) {
            $res['ContainerImageVersions'] = $this->containerImageVersions;
        }
        if (null !== $this->containerRegistry) {
            $res['ContainerRegistry'] = $this->containerRegistry;
        }
        if (null !== $this->lastModified) {
            $res['LastModified'] = $this->lastModified;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerImages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerImageDescription'])) {
            $model->containerImageDescription = $map['ContainerImageDescription'];
        }
        if (isset($map['ContainerImageName'])) {
            $model->containerImageName = $map['ContainerImageName'];
        }
        if (isset($map['ContainerImageNamespace'])) {
            $model->containerImageNamespace = $map['ContainerImageNamespace'];
        }
        if (isset($map['ContainerImageVersions'])) {
            if (!empty($map['ContainerImageVersions'])) {
                $model->containerImageVersions = $map['ContainerImageVersions'];
            }
        }
        if (isset($map['ContainerRegistry'])) {
            $model->containerRegistry = $map['ContainerRegistry'];
        }
        if (isset($map['LastModified'])) {
            $model->lastModified = $map['LastModified'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        return $model;
    }
}
