<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDistResultResponseBody\distResults;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDistResultResponseBody\distResults\distResult\statusStats;
use AlibabaCloud\Tea\Model;

class distResult extends Model
{
    /**
     * @description The name of the data file.
     *
     * @example gcs-prod-websocket-eip-unicom
     *
     * @var string
     */
    public $name;

    /**
     * @description The distribution status statistics.
     *
     * @var statusStats
     */
    public $statusStats;

    /**
     * @description The version number of the data file.
     *
     * @example standard
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'name'        => 'Name',
        'statusStats' => 'StatusStats',
        'version'     => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->statusStats) {
            $res['StatusStats'] = null !== $this->statusStats ? $this->statusStats->toMap() : null;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return distResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['StatusStats'])) {
            $model->statusStats = statusStats::fromMap($map['StatusStats']);
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
