<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail\pluginExtraData;

use AlibabaCloud\Dara\Model;

class nextFireTimeResult extends Model
{
    /**
     * @var string
     */
    public $cronFireType;
    protected $_name = [
        'cronFireType' => 'CronFireType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cronFireType) {
            $res['CronFireType'] = $this->cronFireType;
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
        if (isset($map['CronFireType'])) {
            $model->cronFireType = $map['CronFireType'];
        }

        return $model;
    }
}
