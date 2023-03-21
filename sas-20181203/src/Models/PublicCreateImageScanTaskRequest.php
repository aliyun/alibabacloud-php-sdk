<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class PublicCreateImageScanTaskRequest extends Model
{
    /**
     * @var string
     */
    public $digests;

    /**
     * @var string
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $regionIds;

    /**
     * @var string
     */
    public $registryTypes;

    /**
     * @var string
     */
    public $repoIds;

    /**
     * @var string
     */
    public $repoNames;

    /**
     * @var string
     */
    public $repoNamespaces;

    /**
     * @var string
     */
    public $sourceIp;

    /**
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
     * @return PublicCreateImageScanTaskRequest
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
