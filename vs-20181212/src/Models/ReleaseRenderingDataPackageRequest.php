<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class ReleaseRenderingDataPackageRequest extends Model
{
    /**
     * @var string
     */
    public $dataPackageId;
    protected $_name = [
        'dataPackageId' => 'DataPackageId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataPackageId) {
            $res['DataPackageId'] = $this->dataPackageId;
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
        if (isset($map['DataPackageId'])) {
            $model->dataPackageId = $map['DataPackageId'];
        }

        return $model;
    }
}
