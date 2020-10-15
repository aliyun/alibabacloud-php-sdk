<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDistResultResponse\distResults;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDistResultResponse\distResults\distResult\statusStats;
use AlibabaCloud\Tea\Model;

class distResult extends Model
{
    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $name;

    /**
     * @var statusStats
     */
    public $statusStats;
    protected $_name = [
        'version'     => 'Version',
        'name'        => 'Name',
        'statusStats' => 'StatusStats',
    ];

    public function validate()
    {
        Model::validateRequired('version', $this->version, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('statusStats', $this->statusStats, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->statusStats) {
            $res['StatusStats'] = null !== $this->statusStats ? $this->statusStats->toMap() : null;
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
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['StatusStats'])) {
            $model->statusStats = statusStats::fromMap($map['StatusStats']);
        }

        return $model;
    }
}
