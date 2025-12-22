<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionVersionResponseBody\result\versionConfig;

use AlibabaCloud\Dara\Model;

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
        'condition' => 'Condition',
        'dependency' => 'Dependency',
        'description' => 'Description',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
