<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class PublicPreCheckImageScanTaskRequest extends Model
{
    /**
     * @description The SHA-256 value of the image digest. Separate multiple SHA-256 values with commas (,).
     *
     * @example 6a5e103187b31a94592a47a5858617f7****
     *
     * @var string
     */
    public $digests;

    /**
     * @description The ID of the Container Registry instance in which the image repository is created. Separate multiple IDs with commas (,).
     *
     * @example i-uf6j8vq9l4r5ntht****
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @description The region ID of the image. Separate multiple IDs with commas (,).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionIds;

    /**
     * @description The type of the image repository. Separate multiple types with commas (,). Valid values:
     *
     *   **acr**
     *   **harbor**
     *   **quay**
     *
     * @example acr
     *
     * @var string
     */
    public $registryTypes;

    /**
     * @description The ID of the image repository. Separate multiple IDs with commas (,).
     *
     * @example crr-vridcl4****
     *
     * @var string
     */
    public $repoIds;

    /**
     * @description The name of the image repository. Separate multiple names with commas (,).
     *
     * @example centos
     *
     * @var string
     */
    public $repoNames;

    /**
     * @description The namespace to which the image repository belongs. Separate multiple namespaces with commas (,).
     *
     * @example hanghai-namespace
     *
     * @var string
     */
    public $repoNamespaces;

    /**
     * @description The source IP address of the request.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The tag that is added to the image. Separate multiple tags with commas (,).
     *
     * @example 0.2
     *
     * @var string
     */
    public $tags;
    protected $_name = [
        'digests'        => 'Digests',
        'instanceIds'    => 'InstanceIds',
        'regionIds'      => 'RegionIds',
        'registryTypes'  => 'RegistryTypes',
        'repoIds'        => 'RepoIds',
        'repoNames'      => 'RepoNames',
        'repoNamespaces' => 'RepoNamespaces',
        'sourceIp'       => 'SourceIp',
        'tags'           => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->digests) {
            $res['Digests'] = $this->digests;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->regionIds) {
            $res['RegionIds'] = $this->regionIds;
        }
        if (null !== $this->registryTypes) {
            $res['RegistryTypes'] = $this->registryTypes;
        }
        if (null !== $this->repoIds) {
            $res['RepoIds'] = $this->repoIds;
        }
        if (null !== $this->repoNames) {
            $res['RepoNames'] = $this->repoNames;
        }
        if (null !== $this->repoNamespaces) {
            $res['RepoNamespaces'] = $this->repoNamespaces;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PublicPreCheckImageScanTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Digests'])) {
            $model->digests = $map['Digests'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['RegionIds'])) {
            $model->regionIds = $map['RegionIds'];
        }
        if (isset($map['RegistryTypes'])) {
            $model->registryTypes = $map['RegistryTypes'];
        }
        if (isset($map['RepoIds'])) {
            $model->repoIds = $map['RepoIds'];
        }
        if (isset($map['RepoNames'])) {
            $model->repoNames = $map['RepoNames'];
        }
        if (isset($map['RepoNamespaces'])) {
            $model->repoNamespaces = $map['RepoNamespaces'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
