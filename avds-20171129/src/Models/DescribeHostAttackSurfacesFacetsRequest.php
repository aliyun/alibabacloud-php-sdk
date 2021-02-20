<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models;

use AlibabaCloud\Tea\Model;

class DescribeHostAttackSurfacesFacetsRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $host;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'taskId'   => 'TaskId',
        'host'     => 'Host',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHostAttackSurfacesFacetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        return $model;
    }
}
