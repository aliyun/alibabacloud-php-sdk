<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class GetWorkItemWorkFlowInfoRequest extends Model
{
    /**
     * @example 711d33c738b9171c45fa......
     *
     * @var string
     */
    public $configurationId;
    protected $_name = [
        'configurationId' => 'configurationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configurationId) {
            $res['configurationId'] = $this->configurationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWorkItemWorkFlowInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['configurationId'])) {
            $model->configurationId = $map['configurationId'];
        }

        return $model;
    }
}
