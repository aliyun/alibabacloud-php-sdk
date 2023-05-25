<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail\pluginExtraData;

use AlibabaCloud\Tea\Model;

class nextFireTimeResult extends Model
{
    /**
     * @example NOT_SET
     *
     * @var string
     */
    public $cronFireType;
    protected $_name = [
        'cronFireType' => 'CronFireType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cronFireType) {
            $res['CronFireType'] = $this->cronFireType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nextFireTimeResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CronFireType'])) {
            $model->cronFireType = $map['CronFireType'];
        }

        return $model;
    }
}
