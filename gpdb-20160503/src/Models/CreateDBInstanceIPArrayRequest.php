<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class CreateDBInstanceIPArrayRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $IPArrayAttribute;

    /**
     * @var string
     */
    public $IPArrayName;

    /**
     * @var string[]
     */
    public $securityIPList;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'IPArrayAttribute' => 'IPArrayAttribute',
        'IPArrayName' => 'IPArrayName',
        'securityIPList' => 'SecurityIPList',
    ];

    public function validate()
    {
        if (\is_array($this->securityIPList)) {
            Model::validateArray($this->securityIPList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->IPArrayAttribute) {
            $res['IPArrayAttribute'] = $this->IPArrayAttribute;
        }

        if (null !== $this->IPArrayName) {
            $res['IPArrayName'] = $this->IPArrayName;
        }

        if (null !== $this->securityIPList) {
            if (\is_array($this->securityIPList)) {
                $res['SecurityIPList'] = [];
                $n1 = 0;
                foreach ($this->securityIPList as $item1) {
                    $res['SecurityIPList'][$n1] = $item1;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['IPArrayAttribute'])) {
            $model->IPArrayAttribute = $map['IPArrayAttribute'];
        }

        if (isset($map['IPArrayName'])) {
            $model->IPArrayName = $map['IPArrayName'];
        }

        if (isset($map['SecurityIPList'])) {
            if (!empty($map['SecurityIPList'])) {
                $model->securityIPList = [];
                $n1 = 0;
                foreach ($map['SecurityIPList'] as $item1) {
                    $model->securityIPList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
