<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models;

use AlibabaCloud\Tea\Model;

class PopCreateObjectProjectRequest extends Model
{
    /**
     * @var bool
     */
    public $autoBuild;

    /**
     * @var string
     */
    public $bizUsage;

    /**
     * @var string
     */
    public $customSource;

    /**
     * @var string
     */
    public $dependencies;

    /**
     * @var string
     */
    public $foreignUid;

    /**
     * @var string
     */
    public $intro;

    /**
     * @var string
     */
    public $jwtToken;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $recommendStatus;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'autoBuild'       => 'AutoBuild',
        'bizUsage'        => 'BizUsage',
        'customSource'    => 'CustomSource',
        'dependencies'    => 'Dependencies',
        'foreignUid'      => 'ForeignUid',
        'intro'           => 'Intro',
        'jwtToken'        => 'JwtToken',
        'mode'            => 'Mode',
        'recommendStatus' => 'RecommendStatus',
        'title'           => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoBuild) {
            $res['AutoBuild'] = $this->autoBuild;
        }
        if (null !== $this->bizUsage) {
            $res['BizUsage'] = $this->bizUsage;
        }
        if (null !== $this->customSource) {
            $res['CustomSource'] = $this->customSource;
        }
        if (null !== $this->dependencies) {
            $res['Dependencies'] = $this->dependencies;
        }
        if (null !== $this->foreignUid) {
            $res['ForeignUid'] = $this->foreignUid;
        }
        if (null !== $this->intro) {
            $res['Intro'] = $this->intro;
        }
        if (null !== $this->jwtToken) {
            $res['JwtToken'] = $this->jwtToken;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->recommendStatus) {
            $res['RecommendStatus'] = $this->recommendStatus;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PopCreateObjectProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoBuild'])) {
            $model->autoBuild = $map['AutoBuild'];
        }
        if (isset($map['BizUsage'])) {
            $model->bizUsage = $map['BizUsage'];
        }
        if (isset($map['CustomSource'])) {
            $model->customSource = $map['CustomSource'];
        }
        if (isset($map['Dependencies'])) {
            $model->dependencies = $map['Dependencies'];
        }
        if (isset($map['ForeignUid'])) {
            $model->foreignUid = $map['ForeignUid'];
        }
        if (isset($map['Intro'])) {
            $model->intro = $map['Intro'];
        }
        if (isset($map['JwtToken'])) {
            $model->jwtToken = $map['JwtToken'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['RecommendStatus'])) {
            $model->recommendStatus = $map['RecommendStatus'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
