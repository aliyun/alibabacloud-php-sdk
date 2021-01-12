<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRdsResourceSettingsResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRdsResourceSettingsResponseBody\rdsInstanceResourceSettings\rdsInstanceResourceSetting;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rdsInstanceResourceSetting) {
            $res['RdsInstanceResourceSetting'] = [];
            if (null !== $this->rdsInstanceResourceSetting && \is_array($this->rdsInstanceResourceSetting)) {
                $n = 0;
                foreach ($this->rdsInstanceResourceSetting as $item) {
                    $res['RdsInstanceResourceSetting'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rdsInstanceResourceSettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RdsInstanceResourceSetting'])) {
            if (!empty($map['RdsInstanceResourceSetting'])) {
                $model->rdsInstanceResourceSetting = [];
                $n                                 = 0;
                foreach ($map['RdsInstanceResourceSetting'] as $item) {
                    $model->rdsInstanceResourceSetting[$n++] = null !== $item ? rdsInstanceResourceSetting::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
