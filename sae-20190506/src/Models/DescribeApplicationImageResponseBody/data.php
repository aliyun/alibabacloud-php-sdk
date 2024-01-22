<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationImageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description This parameter is reserved.
     *
     * @var string
     */
    public $crUrl;

    /**
     * @description This parameter is reserved.
     *
     * @var string
     */
    public $logo;

    /**
     * @description The ID of the region.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the repository.
     *
     * @example demo
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The name of the namespace to which the repository belongs.
     *
     * @example demo
     *
     * @var string
     */
    public $repoNamespace;

    /**
     * @description The type of the repository. Only Container Registry is supported.
     *
     * @example ALI_HUB
     *
     * @var string
     */
    public $repoOriginType;

    /**
     * @description The tag of the image.
     *
     * @example latest
     *
     * @var string
     */
    public $repoTag;

    /**
     * @description This parameter is reserved.
     *
     * @var string
     */
    public $repoType;
    protected $_name = [
        'crUrl'          => 'CrUrl',
        'logo'           => 'Logo',
        'regionId'       => 'RegionId',
        'repoName'       => 'RepoName',
        'repoNamespace'  => 'RepoNamespace',
        'repoOriginType' => 'RepoOriginType',
        'repoTag'        => 'RepoTag',
        'repoType'       => 'RepoType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->crUrl) {
            $res['CrUrl'] = $this->crUrl;
        }
        if (null !== $this->logo) {
            $res['Logo'] = $this->logo;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->repoNamespace) {
            $res['RepoNamespace'] = $this->repoNamespace;
        }
        if (null !== $this->repoOriginType) {
            $res['RepoOriginType'] = $this->repoOriginType;
        }
        if (null !== $this->repoTag) {
            $res['RepoTag'] = $this->repoTag;
        }
        if (null !== $this->repoType) {
            $res['RepoType'] = $this->repoType;
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
        if (isset($map['CrUrl'])) {
            $model->crUrl = $map['CrUrl'];
        }
        if (isset($map['Logo'])) {
            $model->logo = $map['Logo'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['RepoNamespace'])) {
            $model->repoNamespace = $map['RepoNamespace'];
        }
        if (isset($map['RepoOriginType'])) {
            $model->repoOriginType = $map['RepoOriginType'];
        }
        if (isset($map['RepoTag'])) {
            $model->repoTag = $map['RepoTag'];
        }
        if (isset($map['RepoType'])) {
            $model->repoType = $map['RepoType'];
        }

        return $model;
    }
}
