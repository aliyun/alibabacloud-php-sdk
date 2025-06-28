<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody\storageTypeList\storageType;

class storageTypeList extends Model
{
    /**
     * @var storageType[]
     */
    public $storageType;
    protected $_name = [
        'storageType' => 'StorageType',
    ];

    public function validate()
    {
        if (\is_array($this->storageType)) {
            Model::validateArray($this->storageType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->storageType) {
            if (\is_array($this->storageType)) {
                $res['StorageType'] = [];
                $n1 = 0;
                foreach ($this->storageType as $item1) {
                    $res['StorageType'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['StorageType'])) {
            if (!empty($map['StorageType'])) {
                $model->storageType = [];
                $n1 = 0;
                foreach ($map['StorageType'] as $item1) {
                    $model->storageType[$n1] = storageType::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
