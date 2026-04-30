<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeJVSInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeJVSInstanceResponseBody\data\creditConfig;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeJVSInstanceResponseBody\data\usedCredit;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var creditConfig[]
     */
    public $creditConfig;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jvsPackageId;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var usedCredit[]
     */
    public $usedCredit;
    protected $_name = [
        'createTime' => 'CreateTime',
        'creditConfig' => 'CreditConfig',
        'expireTime' => 'ExpireTime',
        'instanceId' => 'InstanceId',
        'jvsPackageId' => 'JvsPackageId',
        'modifyTime' => 'ModifyTime',
        'status' => 'Status',
        'usedCredit' => 'UsedCredit',
    ];

    public function validate()
    {
        if (\is_array($this->creditConfig)) {
            Model::validateArray($this->creditConfig);
        }
        if (\is_array($this->usedCredit)) {
            Model::validateArray($this->usedCredit);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creditConfig) {
            if (\is_array($this->creditConfig)) {
                $res['CreditConfig'] = [];
                $n1 = 0;
                foreach ($this->creditConfig as $item1) {
                    $res['CreditConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->jvsPackageId) {
            $res['JvsPackageId'] = $this->jvsPackageId;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->usedCredit) {
            if (\is_array($this->usedCredit)) {
                $res['UsedCredit'] = [];
                $n1 = 0;
                foreach ($this->usedCredit as $item1) {
                    $res['UsedCredit'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreditConfig'])) {
            if (!empty($map['CreditConfig'])) {
                $model->creditConfig = [];
                $n1 = 0;
                foreach ($map['CreditConfig'] as $item1) {
                    $model->creditConfig[$n1] = creditConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['JvsPackageId'])) {
            $model->jvsPackageId = $map['JvsPackageId'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UsedCredit'])) {
            if (!empty($map['UsedCredit'])) {
                $model->usedCredit = [];
                $n1 = 0;
                foreach ($map['UsedCredit'] as $item1) {
                    $model->usedCredit[$n1] = usedCredit::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
