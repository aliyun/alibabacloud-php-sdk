<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class StartAndroidInstanceRequest extends Model
{
    /**
     * @description List of instances.
     *
     * @var string[]
     */
    public $androidInstanceIds;

    /**
     * @var string
     */
    public $saleMode;
    protected $_name = [
        'androidInstanceIds' => 'AndroidInstanceIds',
        'saleMode' => 'SaleMode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceIds) {
            $res['AndroidInstanceIds'] = $this->androidInstanceIds;
        }
        if (null !== $this->saleMode) {
            $res['SaleMode'] = $this->saleMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartAndroidInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidInstanceIds'])) {
            if (!empty($map['AndroidInstanceIds'])) {
                $model->androidInstanceIds = $map['AndroidInstanceIds'];
            }
        }
        if (isset($map['SaleMode'])) {
            $model->saleMode = $map['SaleMode'];
        }

        return $model;
    }
}
