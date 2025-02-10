<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableResourceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableResourceResponseBody\supportedDBTypes\supportedDBType;

class supportedDBTypes extends Model
{
    /**
     * @var supportedDBType[]
     */
    public $supportedDBType;
    protected $_name = [
        'supportedDBType' => 'SupportedDBType',
    ];

    public function validate()
    {
        if (\is_array($this->supportedDBType)) {
            Model::validateArray($this->supportedDBType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedDBType) {
            if (\is_array($this->supportedDBType)) {
                $res['SupportedDBType'] = [];
                $n1                     = 0;
                foreach ($this->supportedDBType as $item1) {
                    $res['SupportedDBType'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SupportedDBType'])) {
            if (!empty($map['SupportedDBType'])) {
                $model->supportedDBType = [];
                $n1                     = 0;
                foreach ($map['SupportedDBType'] as $item1) {
                    $model->supportedDBType[$n1++] = supportedDBType::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
