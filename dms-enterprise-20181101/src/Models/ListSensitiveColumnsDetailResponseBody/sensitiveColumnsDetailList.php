<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnsDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnsDetailResponseBody\sensitiveColumnsDetailList\sensitiveColumnsDetail;

class sensitiveColumnsDetailList extends Model
{
    /**
     * @var sensitiveColumnsDetail[]
     */
    public $sensitiveColumnsDetail;
    protected $_name = [
        'sensitiveColumnsDetail' => 'SensitiveColumnsDetail',
    ];

    public function validate()
    {
        if (\is_array($this->sensitiveColumnsDetail)) {
            Model::validateArray($this->sensitiveColumnsDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sensitiveColumnsDetail) {
            if (\is_array($this->sensitiveColumnsDetail)) {
                $res['SensitiveColumnsDetail'] = [];
                $n1                            = 0;
                foreach ($this->sensitiveColumnsDetail as $item1) {
                    $res['SensitiveColumnsDetail'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SensitiveColumnsDetail'])) {
            if (!empty($map['SensitiveColumnsDetail'])) {
                $model->sensitiveColumnsDetail = [];
                $n1                            = 0;
                foreach ($map['SensitiveColumnsDetail'] as $item1) {
                    $model->sensitiveColumnsDetail[$n1++] = sensitiveColumnsDetail::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
