<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListConnectedClustersResponseBody\result;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The ID of the remote instance that is connected to the network of the current instance.
     *
     * @example es-cn-09k1rocex0006****
     *
     * @var string
     */
    public $instances;

    /**
     * @description The network type of the instance.
     *
     * @example vpc
     *
     * @var string
     */
    public $networkType;
    protected $_name = [
        'instances'   => 'instances',
        'networkType' => 'networkType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instances) {
            $res['instances'] = $this->instances;
        }
        if (null !== $this->networkType) {
            $res['networkType'] = $this->networkType;
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
        if (isset($map['instances'])) {
            $model->instances = $map['instances'];
        }
        if (isset($map['networkType'])) {
            $model->networkType = $map['networkType'];
        }

        return $model;
    }
}
