<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20221111\Models;

use AlibabaCloud\Dara\Model;

class UpdateProjectShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $autoBuild;

    /**
     * @var string
     */
    public $extShrink;

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
    public $projectId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'autoBuild' => 'AutoBuild',
        'extShrink' => 'Ext',
        'intro' => 'Intro',
        'jwtToken' => 'JwtToken',
        'projectId' => 'ProjectId',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoBuild) {
            $res['AutoBuild'] = $this->autoBuild;
        }

        if (null !== $this->extShrink) {
            $res['Ext'] = $this->extShrink;
        }

        if (null !== $this->intro) {
            $res['Intro'] = $this->intro;
        }

        if (null !== $this->jwtToken) {
            $res['JwtToken'] = $this->jwtToken;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['AutoBuild'])) {
            $model->autoBuild = $map['AutoBuild'];
        }

        if (isset($map['Ext'])) {
            $model->extShrink = $map['Ext'];
        }

        if (isset($map['Intro'])) {
            $model->intro = $map['Intro'];
        }

        if (isset($map['JwtToken'])) {
            $model->jwtToken = $map['JwtToken'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
