<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class StartImageVulScanRequest extends Model
{
    /**
     * @var string
     */
    public $imageDigest;

    /**
     * @var string
     */
    public $imageLayer;

    /**
     * @var string
     */
    public $imageTag;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string[]
     */
    public $registryTypes;

    /**
     * @var string
     */
    public $repName;

    /**
     * @var string
     */
    public $repoId;

    /**
     * @var string
     */
    public $repoInstanceId;

    /**
     * @var string
     */
    public $repoNamespace;

    /**
     * @var string
     */
    public $repoRegionId;
    protected $_name = [
        'imageDigest'    => 'ImageDigest',
        'imageLayer'     => 'ImageLayer',
        'imageTag'       => 'ImageTag',
        'lang'           => 'Lang',
        'registryTypes'  => 'RegistryTypes',
        'repName'        => 'RepName',
        'repoId'         => 'RepoId',
        'repoInstanceId' => 'RepoInstanceId',
        'repoNamespace'  => 'RepoNamespace',
        'repoRegionId'   => 'RepoRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageDigest) {
            $res['ImageDigest'] = $this->imageDigest;
        }
        if (null !== $this->imageLayer) {
            $res['ImageLayer'] = $this->imageLayer;
        }
        if (null !== $this->imageTag) {
            $res['ImageTag'] = $this->imageTag;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->registryTypes) {
            $res['RegistryTypes'] = $this->registryTypes;
        }
        if (null !== $this->repName) {
            $res['RepName'] = $this->repName;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->repoInstanceId) {
            $res['RepoInstanceId'] = $this->repoInstanceId;
        }
        if (null !== $this->repoNamespace) {
            $res['RepoNamespace'] = $this->repoNamespace;
        }
        if (null !== $this->repoRegionId) {
            $res['RepoRegionId'] = $this->repoRegionId;
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
        if (isset($map['ImageDigest'])) {
            $model->imageDigest = $map['ImageDigest'];
        }
        if (isset($map['ImageLayer'])) {
            $model->imageLayer = $map['ImageLayer'];
        }
        if (isset($map['ImageTag'])) {
            $model->imageTag = $map['ImageTag'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RegistryTypes'])) {
            if (!empty($map['RegistryTypes'])) {
                $model->registryTypes = $map['RegistryTypes'];
            }
        }
        if (isset($map['RepName'])) {
            $model->repName = $map['RepName'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['RepoInstanceId'])) {
            $model->repoInstanceId = $map['RepoInstanceId'];
        }
        if (isset($map['RepoNamespace'])) {
            $model->repoNamespace = $map['RepoNamespace'];
        }
        if (isset($map['RepoRegionId'])) {
            $model->repoRegionId = $map['RepoRegionId'];
        }

        return $model;
    }
}
