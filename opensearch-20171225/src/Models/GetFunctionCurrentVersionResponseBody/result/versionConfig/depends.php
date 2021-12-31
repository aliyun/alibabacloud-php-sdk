<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionCurrentVersionResponseBody\result\versionConfig;

use AlibabaCloud\Tea\Model;

class depends extends Model
{
    /**
     * @var string
     */
    public $condition;

    /**
     * @var string
     */
    public $dependency;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'condition'   => 'Condition',
        'dependency'  => 'Dependency',
        'description' => 'Description',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }
        if (null !== $this->dependency) {
            $res['Dependency'] = $this->dependency;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return depends
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Condition'])) {
            $model->condition = $map['Condition'];
        }
        if (isset($map['Dependency'])) {
            $model->dependency = $map['Dependency'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
