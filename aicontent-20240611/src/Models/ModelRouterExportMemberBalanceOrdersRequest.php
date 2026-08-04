<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ModelRouterExportMemberBalanceOrdersRequest extends Model
{
    /**
     * @var string
     */
    public $balanceType;

    /**
     * @var string
     */
    public $direction;
    protected $_name = [
        'balanceType' => 'balanceType',
        'direction' => 'direction',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->balanceType) {
            $res['balanceType'] = $this->balanceType;
        }

        if (null !== $this->direction) {
            $res['direction'] = $this->direction;
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
        if (isset($map['balanceType'])) {
            $model->balanceType = $map['balanceType'];
        }

        if (isset($map['direction'])) {
            $model->direction = $map['direction'];
        }

        return $model;
    }
}
