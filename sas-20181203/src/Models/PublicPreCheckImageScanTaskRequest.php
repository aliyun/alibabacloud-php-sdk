<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class PublicPreCheckImageScanTaskRequest extends Model
{
    /**
     * @example 6a5e103187b31a94592a47a5858617f7****
     *
     * @var string
     */
    public $digests;

    /**
     * @example i-uf6j8vq9l4r5ntht****
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionIds;

    /**
     * @example acr
     *
     * @var string
     */
    public $registryTypes;

    /**
     * @example crr-vridcl4****
     *
     * @var string
     */
    public $repoIds;

    /**
     * @example centos
     *
     * @var string
     */
    public $repoNames;

    /**
     * @example hanghai-namespace
     *
     * @var string
     */
    public $repoNamespaces;

    /**
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
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
