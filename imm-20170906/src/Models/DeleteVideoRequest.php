<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class DeleteVideoRequest extends Model
{
    /**
     * @var string
     */
    public $project;

    /**
     * @var bool
     */
    public $resources;

    /**
     * @var string
     */
    public $setId;

    /**
     * @var string
     */
    public $videoUri;
    protected $_name = [
        'project'   => 'Project',
        'resources' => 'Resources',
        'setId'     => 'SetId',
        'videoUri'  => 'VideoUri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }
        if (null !== $this->setId) {
            $res['SetId'] = $this->setId;
        }
        if (null !== $this->videoUri) {
            $res['VideoUri'] = $this->videoUri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteVideoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
        }
        if (isset($map['SetId'])) {
            $model->setId = $map['SetId'];
        }
        if (isset($map['VideoUri'])) {
            $model->videoUri = $map['VideoUri'];
        }

        return $model;
    }
}
