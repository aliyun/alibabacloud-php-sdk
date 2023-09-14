<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleActions;

use AlibabaCloud\Tea\Model;

class rewriteConfig extends Model
{
    /**
     * @description Queries per second (QPS). Valid values: **1 to 100000**.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $host;

    /**
     * @description The QPS of each IP address. Valid values: **1 to 100000**.
     *
     * >  If **QPS** and PerIpQps are configured at the same time, the value of the **PerIpQps** parameter must be smaller than that of the **QPS** parameter.
     * @example /tsdf
     *
     * @var string
     */
    public $path;

    /**
     * @description The type of destination to which network traffic is mirrored. Valid values:
     *
     *   **ForwardGroupMirror**: a server group.
     *   **SlsMirror**: Log Service.
     *
     * @example quedsa
     *
     * @var string
     */
    public $query;
    protected $_name = [
        'host'  => 'Host',
        'path'  => 'Path',
        'query' => 'Query',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rewriteConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        return $model;
    }
}
