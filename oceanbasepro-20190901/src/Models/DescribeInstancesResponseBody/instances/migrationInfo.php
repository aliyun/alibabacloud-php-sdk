<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody\instances;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody\instances\migrationInfo\checkResult;

class migrationInfo extends Model
{
    /**
     * @var checkResult
     */
    public $checkResult;

    /**
     * @var bool
     */
    public $migratable;
    protected $_name = [
        'checkResult' => 'CheckResult',
        'migratable' => 'Migratable',
    ];

    public function validate()
    {
        if (null !== $this->checkResult) {
            $this->checkResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkResult) {
            $res['CheckResult'] = null !== $this->checkResult ? $this->checkResult->toArray($noStream) : $this->checkResult;
        }

        if (null !== $this->migratable) {
            $res['Migratable'] = $this->migratable;
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
        if (isset($map['CheckResult'])) {
            $model->checkResult = checkResult::fromMap($map['CheckResult']);
        }

        if (isset($map['Migratable'])) {
            $model->migratable = $map['Migratable'];
        }

        return $model;
    }
}
