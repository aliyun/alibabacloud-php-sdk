<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class CreateProjectRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $projectName;
    protected $_name = [
        'description' => 'description',
        'projectName' => 'projectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }

        return $model;
    }
}
