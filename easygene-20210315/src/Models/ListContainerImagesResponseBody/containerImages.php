<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models\ListContainerImagesResponseBody;

use AlibabaCloud\Tea\Model;

class containerImages extends Model
{
    /**
     * @example a suite of programs for interacting with high-throughput sequencing data.
     *
     * @var string
     */
    public $containerImageDescription;

    /**
     * @example samtools
     *
     * @var string
     */
    public $containerImageName;

    /**
     * @example samtools
     *
     * @var string
     */
    public $containerImageNamespace;

    /**
     * @var string[]
     */
    public $containerImageVersions;

    /**
     * @example registry-vpc.cn-shenzhen.aliyuncs.com
     *
     * @var string
     */
    public $containerRegistry;

    /**
     * @example yyyy/MM/dd HH:mm:ss
     *
     * @var string
     */
    public $lastModified;

    /**
     * @example cn-shenzhen
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
