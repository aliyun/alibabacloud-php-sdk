<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class DescribeComfyProductionDownloadUrlRequest extends Model
{
    /**
     * @var string
     */
    public $productionId;
    protected $_name = [
        'productionId' => 'ProductionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productionId) {
            $res['ProductionId'] = $this->productionId;
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
        if (isset($map['ProductionId'])) {
            $model->productionId = $map['ProductionId'];
        }

        return $model;
    }
}
