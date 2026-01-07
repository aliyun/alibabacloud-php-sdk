<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class GetDataAgentSubAccountInfoRequest extends Model
{
    /**
     * @var string
     */
    public $dmsUnit;

    /**
     * @var string
     */
    public $subAccountId;
    protected $_name = [
        'dmsUnit' => 'DmsUnit',
        'subAccountId' => 'SubAccountId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dmsUnit) {
            $res['DmsUnit'] = $this->dmsUnit;
        }

        if (null !== $this->subAccountId) {
            $res['SubAccountId'] = $this->subAccountId;
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
        if (isset($map['DmsUnit'])) {
            $model->dmsUnit = $map['DmsUnit'];
        }

        if (isset($map['SubAccountId'])) {
            $model->subAccountId = $map['SubAccountId'];
        }

        return $model;
    }
}
