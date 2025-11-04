<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ApplyTempStorageLeaseResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ApplyTempStorageLeaseResponseBody\data\param;

class data extends Model
{
    /**
     * @var param
     */
    public $param;

    /**
     * @var string
     */
    public $tempStorageLeaseId;
    protected $_name = [
        'param' => 'Param',
        'tempStorageLeaseId' => 'TempStorageLeaseId',
    ];

    public function validate()
    {
        if (null !== $this->param) {
            $this->param->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->param) {
            $res['Param'] = null !== $this->param ? $this->param->toArray($noStream) : $this->param;
        }

        if (null !== $this->tempStorageLeaseId) {
            $res['TempStorageLeaseId'] = $this->tempStorageLeaseId;
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
        if (isset($map['Param'])) {
            $model->param = param::fromMap($map['Param']);
        }

        if (isset($map['TempStorageLeaseId'])) {
            $model->tempStorageLeaseId = $map['TempStorageLeaseId'];
        }

        return $model;
    }
}
