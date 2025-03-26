<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class CreateProjectRequest extends Model
{
    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $projectType;
    protected $_name = [
        'projectName' => 'projectName',
        'projectType' => 'projectType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }

        if (null !== $this->projectType) {
            $res['projectType'] = $this->projectType;
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
        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }

        if (isset($map['projectType'])) {
            $model->projectType = $map['projectType'];
        }

        return $model;
    }
}
