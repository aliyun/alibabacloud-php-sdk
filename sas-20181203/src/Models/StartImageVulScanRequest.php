<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class StartImageVulScanRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $repoRegionId;

    /**
     * @var string
     */
    public $repoInstanceId;

    /**
     * @var string
     */
    public $repoId;

    /**
     * @var string
     */
    public $repName;

    /**
     * @var string
     */
    public $repoNamespace;

    /**
     * @var string
     */
    public $imageTag;

    /**
     * @var string
     */
    public $imageDigest;

    /**
     * @var string
     */
    public $imageLayer;

    /**
     * @var string[]
     */
    public $registryTypes;
    protected $_name = [
        'sourceIp'       => 'SourceIp',
        'lang'           => 'Lang',
        'repoRegionId'   => 'RepoRegionId',
        'repoInstanceId' => 'RepoInstanceId',
        'repoId'         => 'RepoId',
        'repName'        => 'RepName',
        'repoNamespace'  => 'RepoNamespace',
        'imageTag'       => 'ImageTag',
        'imageDigest'    => 'ImageDigest',
        'imageLayer'     => 'ImageLayer',
        'registryTypes'  => 'RegistryTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->repoRegionId) {
            $res['RepoRegionId'] = $this->repoRegionId;
        }
        if (null !== $this->repoInstanceId) {
            $res['RepoInstanceId'] = $this->repoInstanceId;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->repName) {
            $res['RepName'] = $this->repName;
        }
        if (null !== $this->repoNamespace) {
            $res['RepoNamespace'] = $this->repoNamespace;
        }
        if (null !== $this->imageTag) {
            $res['ImageTag'] = $this->imageTag;
        }
        if (null !== $this->imageDigest) {
            $res['ImageDigest'] = $this->imageDigest;
        }
        if (null !== $this->imageLayer) {
            $res['ImageLayer'] = $this->imageLayer;
        }
        if (null !== $this->registryTypes) {
            $res['RegistryTypes'] = $this->registryTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartImageVulScanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RepoRegionId'])) {
            $model->repoRegionId = $map['RepoRegionId'];
        }
        if (isset($map['RepoInstanceId'])) {
            $model->repoInstanceId = $map['RepoInstanceId'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['RepName'])) {
            $model->repName = $map['RepName'];
        }
        if (isset($map['RepoNamespace'])) {
            $model->repoNamespace = $map['RepoNamespace'];
        }
        if (isset($map['ImageTag'])) {
            $model->imageTag = $map['ImageTag'];
        }
        if (isset($map['ImageDigest'])) {
            $model->imageDigest = $map['ImageDigest'];
        }
        if (isset($map['ImageLayer'])) {
            $model->imageLayer = $map['ImageLayer'];
        }
        if (isset($map['RegistryTypes'])) {
            if (!empty($map['RegistryTypes'])) {
                $model->registryTypes = $map['RegistryTypes'];
            }
        }

        return $model;
    }
}
