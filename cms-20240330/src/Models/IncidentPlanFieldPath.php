<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class IncidentPlanFieldPath extends Model
{
    /**
     * @var string
     */
    public $fieldAlias;

    /**
     * @var string[]
     */
    public $fieldPath;
    protected $_name = [
        'fieldAlias' => 'fieldAlias',
        'fieldPath' => 'fieldPath',
    ];

    public function validate()
    {
        if (\is_array($this->fieldPath)) {
            Model::validateArray($this->fieldPath);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fieldAlias) {
            $res['fieldAlias'] = $this->fieldAlias;
        }

        if (null !== $this->fieldPath) {
            if (\is_array($this->fieldPath)) {
                $res['fieldPath'] = [];
                $n1 = 0;
                foreach ($this->fieldPath as $item1) {
                    $res['fieldPath'][$n1++] = $item1;
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
        if (isset($map['fieldAlias'])) {
            $model->fieldAlias = $map['fieldAlias'];
        }

        if (isset($map['fieldPath'])) {
            if (!empty($map['fieldPath'])) {
                $model->fieldPath = [];
                $n1 = 0;
                foreach ($map['fieldPath'] as $item1) {
                    $model->fieldPath[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
