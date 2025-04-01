<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationImageResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $crUrl;

    /**
     * @var string
     */
    public $logo;

    /**
     * @var string
     */
    public $regionId;

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
    public $repoOriginType;

    /**
     * @var string
     */
    public $repoTag;

    /**
     * @var string
     */
    public $repoType;
    protected $_name = [
        'crUrl' => 'CrUrl',
        'logo' => 'Logo',
        'regionId' => 'RegionId',
        'repoName' => 'RepoName',
        'repoNamespace' => 'RepoNamespace',
        'repoOriginType' => 'RepoOriginType',
        'repoTag' => 'RepoTag',
        'repoType' => 'RepoType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
