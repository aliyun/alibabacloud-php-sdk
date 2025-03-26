<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRdsResourceSettingsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRdsResourceSettingsResponseBody\rdsInstanceResourceSettings\rdsInstanceResourceSetting;

class rdsInstanceResourceSettings extends Model
{
    /**
     * @var rdsInstanceResourceSetting[]
     */
    public $rdsInstanceResourceSetting;
    protected $_name = [
        'rdsInstanceResourceSetting' => 'RdsInstanceResourceSetting',
    ];

    public function validate()
    {
        if (\is_array($this->rdsInstanceResourceSetting)) {
            Model::validateArray($this->rdsInstanceResourceSetting);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rdsInstanceResourceSetting) {
            if (\is_array($this->rdsInstanceResourceSetting)) {
                $res['RdsInstanceResourceSetting'] = [];
                $n1 = 0;
                foreach ($this->rdsInstanceResourceSetting as $item1) {
                    $res['RdsInstanceResourceSetting'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RdsInstanceResourceSetting'])) {
            if (!empty($map['RdsInstanceResourceSetting'])) {
                $model->rdsInstanceResourceSetting = [];
                $n1 = 0;
                foreach ($map['RdsInstanceResourceSetting'] as $item1) {
                    $model->rdsInstanceResourceSetting[$n1++] = rdsInstanceResourceSetting::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
