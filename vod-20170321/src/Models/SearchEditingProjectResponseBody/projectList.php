<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SearchEditingProjectResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\SearchEditingProjectResponseBody\projectList\project;

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
        if (\is_array($this->project)) {
            Model::validateArray($this->project);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->project) {
            if (\is_array($this->project)) {
                $res['Project'] = [];
                $n1 = 0;
                foreach ($this->project as $item1) {
                    $res['Project'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Project'])) {
            if (!empty($map['Project'])) {
                $model->project = [];
                $n1 = 0;
                foreach ($map['Project'] as $item1) {
                    $model->project[$n1] = project::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
