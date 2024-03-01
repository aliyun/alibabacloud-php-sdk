<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInstanceRiskLevelsResponseBody;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInstanceRiskLevelsResponseBody\instanceRisks\details;
use AlibabaCloud\Tea\Model;

class instanceRisks extends Model
{
    /**
     * @var details[]
     */
    public $details;

    /**
     * @example vipcloudfw-cn-7mz2fj8nm0u
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example medium
     *
     * @var string
     */
    public $level;
    protected $_name = [
        'details'    => 'Details',
        'instanceId' => 'InstanceId',
        'level'      => 'Level',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->details) {
            $res['Details'] = [];
            if (null !== $this->details && \is_array($this->details)) {
                $n = 0;
                foreach ($this->details as $item) {
                    $res['Details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceRisks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = [];
                $n              = 0;
                foreach ($map['Details'] as $item) {
                    $model->details[$n++] = null !== $item ? details::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
