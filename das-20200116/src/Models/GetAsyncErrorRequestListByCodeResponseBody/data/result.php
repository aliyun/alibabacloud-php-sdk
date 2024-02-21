<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetAsyncErrorRequestListByCodeResponseBody\data;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The instance ID
     *
     * @example rm-2ze8g2am97624****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description SQL ID.
     *
     * @example ad78a4e7d3ce81590c9dc2d5f4bc****
     *
     * @var string
     */
    public $sqlId;
    protected $_name = [
        'instanceId' => 'instanceId',
        'sqlId'      => 'sqlId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->sqlId) {
            $res['sqlId'] = $this->sqlId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['sqlId'])) {
            $model->sqlId = $map['sqlId'];
        }

        return $model;
    }
}
