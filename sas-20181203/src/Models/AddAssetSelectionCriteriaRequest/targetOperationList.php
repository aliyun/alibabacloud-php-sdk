<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\AddAssetSelectionCriteriaRequest;

use AlibabaCloud\Dara\Model;

class targetOperationList extends Model
{
    /**
     * @var string
     */
    public $operation;
    /**
     * @var string
     */
    public $target;
    protected $_name = [
        'operation' => 'Operation',
        'target'    => 'Target',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        if (null !== $this->target) {
            $res['Target'] = $this->target;
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
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}
