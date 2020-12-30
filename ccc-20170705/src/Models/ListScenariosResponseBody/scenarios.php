<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListScenariosResponseBody;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListScenariosResponseBody\scenarios\strategy;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListScenariosResponseBody\scenarios\surveys;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListScenariosResponseBody\scenarios\variables;
use AlibabaCloud\Tea\Model;

class scenarios extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var strategy
     */
    public $strategy;

    /**
     * @var bool
     */
    public $isTemplate;

    /**
     * @var string
     */
    public $description;

    /**
     * @var surveys[]
     */
    public $surveys;

    /**
     * @var variables[]
     */
    public $variables;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'type'        => 'Type',
        'strategy'    => 'Strategy',
        'isTemplate'  => 'IsTemplate',
        'description' => 'Description',
        'surveys'     => 'Surveys',
        'variables'   => 'Variables',
        'name'        => 'Name',
        'id'          => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = null !== $this->strategy ? $this->strategy->toMap() : null;
        }
        if (null !== $this->isTemplate) {
            $res['IsTemplate'] = $this->isTemplate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->variables) {
            $res['Variables'] = [];
            if (null !== $this->variables && \is_array($this->variables)) {
                $n = 0;
                foreach ($this->variables as $item) {
                    $res['Variables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scenarios
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Strategy'])) {
            $model->strategy = strategy::fromMap($map['Strategy']);
        }
        if (isset($map['IsTemplate'])) {
            $model->isTemplate = $map['IsTemplate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['Variables'])) {
            if (!empty($map['Variables'])) {
                $model->variables = [];
                $n                = 0;
                foreach ($map['Variables'] as $item) {
                    $model->variables[$n++] = null !== $item ? variables::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
