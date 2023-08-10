<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceResponseBody\instance;

use AlibabaCloud\Tea\Model;

class defaultEndpoint extends Model
{
    /**
     * @description The endpoint of the instance.
     *
     * @example example-xxx.aliyunidaas.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The status of the endpoint. Valid values:
     *
     *   resolved
     *   unresolved
     *
     * @example resolved
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'endpoint' => 'Endpoint',
        'status'   => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return defaultEndpoint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
