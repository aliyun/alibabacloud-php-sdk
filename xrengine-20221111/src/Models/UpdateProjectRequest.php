<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20221111\Models;

use AlibabaCloud\Dara\Model;

class UpdateProjectRequest extends Model
{
    /**
     * @var bool
     */
    public $autoBuild;

    /**
     * @var mixed[]
     */
    public $ext;

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
        'ext' => 'Ext',
        'intro' => 'Intro',
        'jwtToken' => 'JwtToken',
        'projectId' => 'ProjectId',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->ext)) {
            Model::validateArray($this->ext);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoBuild) {
            $res['AutoBuild'] = $this->autoBuild;
        }

        if (null !== $this->ext) {
            if (\is_array($this->ext)) {
                $res['Ext'] = [];
                foreach ($this->ext as $key1 => $value1) {
                    $res['Ext'][$key1] = $value1;
                }
            }
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
            if (!empty($map['Ext'])) {
                $model->ext = [];
                foreach ($map['Ext'] as $key1 => $value1) {
                    $model->ext[$key1] = $value1;
                }
            }
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
