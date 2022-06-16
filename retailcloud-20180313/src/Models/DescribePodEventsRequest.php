<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class DescribePodEventsRequest extends Model
{
    /**
     * @var string
     */
    public $appInstId;

    /**
     * @var int
     */
    public $deployOrderId;
    protected $_name = [
        'appInstId'     => 'AppInstId',
        'deployOrderId' => 'DeployOrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstId) {
            $res['AppInstId'] = $this->appInstId;
        }
        if (null !== $this->deployOrderId) {
            $res['DeployOrderId'] = $this->deployOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePodEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstId'])) {
            $model->appInstId = $map['AppInstId'];
        }
        if (isset($map['DeployOrderId'])) {
            $model->deployOrderId = $map['DeployOrderId'];
        }

        return $model;
    }
}
