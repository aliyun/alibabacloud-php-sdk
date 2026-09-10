<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\AddDataCheckTemplateRequest;

use AlibabaCloud\Dara\Model;

class dsEngineRels extends Model
{
    /**
     * @var string
     */
    public $dsEngineId;

    /**
     * @var string
     */
    public $dsType;

    /**
     * @var string[]
     */
    public $engineTypes;
    protected $_name = [
        'dsEngineId' => 'dsEngineId',
        'dsType' => 'dsType',
        'engineTypes' => 'engineTypes',
    ];

    public function validate()
    {
        if (\is_array($this->engineTypes)) {
            Model::validateArray($this->engineTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dsEngineId) {
            $res['dsEngineId'] = $this->dsEngineId;
        }

        if (null !== $this->dsType) {
            $res['dsType'] = $this->dsType;
        }

        if (null !== $this->engineTypes) {
            if (\is_array($this->engineTypes)) {
                $res['engineTypes'] = [];
                $n1 = 0;
                foreach ($this->engineTypes as $item1) {
                    $res['engineTypes'][$n1] = $item1;
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
        if (isset($map['dsEngineId'])) {
            $model->dsEngineId = $map['dsEngineId'];
        }

        if (isset($map['dsType'])) {
            $model->dsType = $map['dsType'];
        }

        if (isset($map['engineTypes'])) {
            if (!empty($map['engineTypes'])) {
                $model->engineTypes = [];
                $n1 = 0;
                foreach ($map['engineTypes'] as $item1) {
                    $model->engineTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
