<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody\DBNodeClassList\DBNodeClass;

class DBNodeClassList extends Model
{
    /**
     * @var DBNodeClass[]
     */
    public $DBNodeClass;
    protected $_name = [
        'DBNodeClass' => 'DBNodeClass',
    ];

    public function validate()
    {
        if (\is_array($this->DBNodeClass)) {
            Model::validateArray($this->DBNodeClass);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBNodeClass) {
            if (\is_array($this->DBNodeClass)) {
                $res['DBNodeClass'] = [];
                $n1 = 0;
                foreach ($this->DBNodeClass as $item1) {
                    $res['DBNodeClass'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DBNodeClass'])) {
            if (!empty($map['DBNodeClass'])) {
                $model->DBNodeClass = [];
                $n1 = 0;
                foreach ($map['DBNodeClass'] as $item1) {
                    $model->DBNodeClass[$n1++] = DBNodeClass::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
