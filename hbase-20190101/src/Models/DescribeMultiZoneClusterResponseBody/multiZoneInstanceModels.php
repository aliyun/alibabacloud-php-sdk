<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneClusterResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneClusterResponseBody\multiZoneInstanceModels\multiZoneInstanceModel;

class multiZoneInstanceModels extends Model
{
    /**
     * @var multiZoneInstanceModel[]
     */
    public $multiZoneInstanceModel;
    protected $_name = [
        'multiZoneInstanceModel' => 'MultiZoneInstanceModel',
    ];

    public function validate()
    {
        if (\is_array($this->multiZoneInstanceModel)) {
            Model::validateArray($this->multiZoneInstanceModel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->multiZoneInstanceModel) {
            if (\is_array($this->multiZoneInstanceModel)) {
                $res['MultiZoneInstanceModel'] = [];
                $n1 = 0;
                foreach ($this->multiZoneInstanceModel as $item1) {
                    $res['MultiZoneInstanceModel'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['MultiZoneInstanceModel'])) {
            if (!empty($map['MultiZoneInstanceModel'])) {
                $model->multiZoneInstanceModel = [];
                $n1 = 0;
                foreach ($map['MultiZoneInstanceModel'] as $item1) {
                    $model->multiZoneInstanceModel[$n1] = multiZoneInstanceModel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
