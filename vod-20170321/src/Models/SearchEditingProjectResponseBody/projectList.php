<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SearchEditingProjectResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\SearchEditingProjectResponseBody\projectList\project;
use AlibabaCloud\Tea\Model;

class projectList extends Model
{
    /**
     * @var project[]
     */
    public $project;
    protected $_name = [
        'project' => 'Project',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->project) {
            $res['Project'] = [];
            if (null !== $this->project && \is_array($this->project)) {
                $n = 0;
                foreach ($this->project as $item) {
                    $res['Project'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Project'])) {
            if (!empty($map['Project'])) {
                $model->project = [];
                $n              = 0;
                foreach ($map['Project'] as $item) {
                    $model->project[$n++] = null !== $item ? project::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
