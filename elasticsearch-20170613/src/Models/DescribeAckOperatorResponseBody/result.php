<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeAckOperatorResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The installation status of ES-operator. Valid values:
     *
     *   deployed: ES-operator is installed.
     *   not-deploy: ES-operator is not installed.
     *   failed: ES-operator fails to be installed.
     *   unknown: The installation status of ES-operator is unknown.
     *
     * @example deployed
     *
     * @var string
     */
    public $status;

    /**
     * @description The version of ES-operator.
     *
     * @example 1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'status'  => 'status',
        'version' => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
