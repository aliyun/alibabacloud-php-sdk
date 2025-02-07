<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppVersionResponseBody\version\containers;

use AlibabaCloud\Dara\Model;

class ACRImageInfo extends Model
{
    /**
     * @var string
     */
    public $domain;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var bool
     */
    public $isEnterpriseRegistry;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $repoId;
    /**
     * @var string
     */
    public $repoName;
    /**
     * @var string
     */
    public $repoNamespace;
    /**
     * @var string
     */
    public $tag;
    /**
     * @var string
     */
    public $tagUrl;
    protected $_name = [
        'domain'               => 'Domain',
        'instanceId'           => 'InstanceId',
        'isEnterpriseRegistry' => 'IsEnterpriseRegistry',
        'regionId'             => 'RegionId',
        'repoId'               => 'RepoId',
        'repoName'             => 'RepoName',
        'repoNamespace'        => 'RepoNamespace',
        'tag'                  => 'Tag',
        'tagUrl'               => 'TagUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->isEnterpriseRegistry) {
            $res['IsEnterpriseRegistry'] = $this->isEnterpriseRegistry;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }

        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }

        if (null !== $this->repoNamespace) {
            $res['RepoNamespace'] = $this->repoNamespace;
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        if (null !== $this->tagUrl) {
            $res['TagUrl'] = $this->tagUrl;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IsEnterpriseRegistry'])) {
            $model->isEnterpriseRegistry = $map['IsEnterpriseRegistry'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }

        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }

        if (isset($map['RepoNamespace'])) {
            $model->repoNamespace = $map['RepoNamespace'];
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        if (isset($map['TagUrl'])) {
            $model->tagUrl = $map['TagUrl'];
        }

        return $model;
    }
}
