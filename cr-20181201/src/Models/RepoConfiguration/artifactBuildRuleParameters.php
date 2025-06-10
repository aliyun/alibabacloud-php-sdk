<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\RepoConfiguration;

use AlibabaCloud\Dara\Model;

class artifactBuildRuleParameters extends Model
{
    /**
     * @var bool
     */
    public $imageIndexOnly;

    /**
     * @var string
     */
    public $priorityFile;
    protected $_name = [
        'imageIndexOnly' => 'ImageIndexOnly',
        'priorityFile' => 'PriorityFile',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageIndexOnly) {
            $res['ImageIndexOnly'] = $this->imageIndexOnly;
        }

        if (null !== $this->priorityFile) {
            $res['PriorityFile'] = $this->priorityFile;
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
        if (isset($map['ImageIndexOnly'])) {
            $model->imageIndexOnly = $map['ImageIndexOnly'];
        }

        if (isset($map['PriorityFile'])) {
            $model->priorityFile = $map['PriorityFile'];
        }

        return $model;
    }
}
