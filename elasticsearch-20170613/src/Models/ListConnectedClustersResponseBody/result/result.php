<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListConnectedClustersResponseBody\result;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $instances;
    protected $_name = [
        'networkType' => 'networkType',
        'instances'   => 'instances',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkType) {
            $res['networkType'] = $this->networkType;
        }
        if (null !== $this->instances) {
            $res['instances'] = $this->instances;
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
        if (isset($map['networkType'])) {
            $model->networkType = $map['networkType'];
        }
        if (isset($map['instances'])) {
            $model->instances = $map['instances'];
        }

        return $model;
    }
}
