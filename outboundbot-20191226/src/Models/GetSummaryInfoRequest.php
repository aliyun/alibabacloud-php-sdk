<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class GetSummaryInfoRequest extends Model
{
    /**
     * @example []
     *
     * @var string[]
     */
    public $instanceIdList;
    protected $_name = [
        'instanceIdList' => 'InstanceIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIdList) {
            $res['InstanceIdList'] = $this->instanceIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSummaryInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIdList'])) {
            if (!empty($map['InstanceIdList'])) {
                $model->instanceIdList = $map['InstanceIdList'];
            }
        }

        return $model;
    }
}
