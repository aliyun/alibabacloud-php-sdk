<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterVulStatisticsRequest extends Model
{
    /**
     * @description The ID of the container cluster.
     *
     * @example c471f0f61b9c04f8380556e922cf1****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The type of the vulnerabilities. Valid values:
     *
     *   **cve**: Linux software vulnerabilities
     *   **app**: application vulnerabilities
     *   **sca**: vulnerabilities that are detected based on software component analysis
     *
     * @example cve,app,sca
     *
     * @var string
     */
    public $types;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'types'     => 'Types',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->types) {
            $res['Types'] = $this->types;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterVulStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Types'])) {
            $model->types = $map['Types'];
        }

        return $model;
    }
}
