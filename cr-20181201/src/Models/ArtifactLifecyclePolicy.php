<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cr\V20181201\Models\ArtifactLifecyclePolicy\condition;
use AlibabaCloud\SDK\Cr\V20181201\Models\ArtifactLifecyclePolicy\filter;

class ArtifactLifecyclePolicy extends Model
{
    /**
     * @var condition
     */
    public $condition;

    /**
     * @var filter
     */
    public $filter;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'condition' => 'Condition',
        'filter' => 'Filter',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->condition) {
            $this->condition->validate();
        }
        if (null !== $this->filter) {
            $this->filter->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->condition) {
            $res['Condition'] = null !== $this->condition ? $this->condition->toArray($noStream) : $this->condition;
        }

        if (null !== $this->filter) {
            $res['Filter'] = null !== $this->filter ? $this->filter->toArray($noStream) : $this->filter;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
            $model->condition = condition::fromMap($map['Condition']);
        }

        if (isset($map['Filter'])) {
            $model->filter = filter::fromMap($map['Filter']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
