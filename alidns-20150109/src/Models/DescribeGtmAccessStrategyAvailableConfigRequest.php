<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeGtmAccessStrategyAvailableConfigRequest extends Model
{
    /**
     * @description The ID of the Global Traffic Manager (GTM) instance.
     *
     * This parameter is required.
     *
     * @example gtm-cn-xxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The language.
     *
     * @example en
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'lang' => 'Lang',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGtmAccessStrategyAvailableConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
