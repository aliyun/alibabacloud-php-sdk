<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryCreateInstancePriceRequest\createInstanceRequest;

use AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryCreateInstancePriceRequest\createInstanceRequest\storage\oss;
use AlibabaCloud\Tea\Model;

class storage extends Model
{
    /**
     * @var oss
     */
    public $oss;
    protected $_name = [
        'oss' => 'Oss',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->oss) {
            $res['Oss'] = null !== $this->oss ? $this->oss->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Oss'])) {
            $model->oss = oss::fromMap($map['Oss']);
        }

        return $model;
    }
}
