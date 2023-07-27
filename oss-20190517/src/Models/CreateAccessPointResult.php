<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class CreateAccessPointResult extends Model
{
    /**
     * @var string
     */
    public $accessPointArn;

    /**
     * @var string
     */
    public $alias;
    protected $_name = [
        'accessPointArn' => 'AccessPointArn',
        'alias'          => 'Alias',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPointArn) {
            $res['AccessPointArn'] = $this->accessPointArn;
        }
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAccessPointResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPointArn'])) {
            $model->accessPointArn = $map['AccessPointArn'];
        }
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        return $model;
    }
}
