<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldAlias) {
            $res['fieldAlias'] = $this->fieldAlias;
        }
        if (null !== $this->fieldPath) {
            $res['fieldPath'] = $this->fieldPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IncidentPlanFieldPath
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fieldAlias'])) {
            $model->fieldAlias = $map['fieldAlias'];
        }
        if (isset($map['fieldPath'])) {
            if (!empty($map['fieldPath'])) {
                $model->fieldPath = $map['fieldPath'];
            }
        }

        return $model;
    }
}
