<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class DescribeQuickSaleConfigRequest extends Model
{
    /**
     * @var string
     */
    public $commodity;
    /**
     * @var string
     */
    public $engine;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'commodity' => 'Commodity',
        'engine'    => 'Engine',
        'regionId'  => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commodity) {
            $res['Commodity'] = $this->commodity;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Commodity'])) {
            $model->commodity = $map['Commodity'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
