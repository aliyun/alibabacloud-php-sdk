<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListScenarioTemplatesResponseBody;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListScenarioTemplatesResponseBody\scenarioTemplates\surveys;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListScenarioTemplatesResponseBody\scenarioTemplates\variables;
use AlibabaCloud\Tea\Model;

class scenarioTemplates extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $isTemplate;

    /**
     * @var string
     */
    public $name;

    /**
     * @var surveys[]
     */
    public $surveys;

    /**
     * @var string
     */
    public $type;

    /**
     * @var variables[]
     */
    public $variables;
    protected $_name = [
        'description' => 'Description',
        'id'          => 'Id',
        'isTemplate'  => 'IsTemplate',
        'name'        => 'Name',
        'surveys'     => 'Surveys',
        'type'        => 'Type',
        'variables'   => 'Variables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isTemplate) {
            $res['IsTemplate'] = $this->isTemplate;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->surveys) {
            $res['Surveys'] = [];
            if (null !== $this->surveys && \is_array($this->surveys)) {
                $n = 0;
                foreach ($this->surveys as $item) {
                    $res['Surveys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->variables) {
            $res['Variables'] = [];
            if (null !== $this->variables && \is_array($this->variables)) {
                $n = 0;
                foreach ($this->variables as $item) {
                    $res['Variables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scenarioTemplates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsTemplate'])) {
            $model->isTemplate = $map['IsTemplate'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Surveys'])) {
            if (!empty($map['Surveys'])) {
                $model->surveys = [];
                $n              = 0;
                foreach ($map['Surveys'] as $item) {
                    $model->surveys[$n++] = null !== $item ? surveys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Variables'])) {
            if (!empty($map['Variables'])) {
                $model->variables = [];
                $n                = 0;
                foreach ($map['Variables'] as $item) {
                    $model->variables[$n++] = null !== $item ? variables::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
