<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseContactEditResponseBody\data;

use AlibabaCloud\Dara\Model;

class errorList extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorDesc;

    /**
     * @var string
     */
    public $item;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'errorDesc' => 'ErrorDesc',
        'item' => 'Item',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorDesc) {
            $res['ErrorDesc'] = $this->errorDesc;
        }

        if (null !== $this->item) {
            $res['Item'] = $this->item;
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorDesc'])) {
            $model->errorDesc = $map['ErrorDesc'];
        }

        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }

        return $model;
    }
}
