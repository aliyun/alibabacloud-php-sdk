<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceRuleSaveRequest\entities;

class InvoiceRuleSaveRequest extends Model
{
    /**
     * @var bool
     */
    public $allEmploye;

    /**
     * @var entities[]
     */
    public $entities;

    /**
     * @var int
     */
    public $scope;

    /**
     * @var string
     */
    public $thirdPartId;
    protected $_name = [
        'allEmploye' => 'all_employe',
        'entities' => 'entities',
        'scope' => 'scope',
        'thirdPartId' => 'third_part_id',
    ];

    public function validate()
    {
        if (\is_array($this->entities)) {
            Model::validateArray($this->entities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allEmploye) {
            $res['all_employe'] = $this->allEmploye;
        }

        if (null !== $this->entities) {
            if (\is_array($this->entities)) {
                $res['entities'] = [];
                $n1 = 0;
                foreach ($this->entities as $item1) {
                    $res['entities'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }

        if (null !== $this->thirdPartId) {
            $res['third_part_id'] = $this->thirdPartId;
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
        if (isset($map['all_employe'])) {
            $model->allEmploye = $map['all_employe'];
        }

        if (isset($map['entities'])) {
            if (!empty($map['entities'])) {
                $model->entities = [];
                $n1 = 0;
                foreach ($map['entities'] as $item1) {
                    $model->entities[$n1++] = entities::fromMap($item1);
                }
            }
        }

        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        if (isset($map['third_part_id'])) {
            $model->thirdPartId = $map['third_part_id'];
        }

        return $model;
    }
}
