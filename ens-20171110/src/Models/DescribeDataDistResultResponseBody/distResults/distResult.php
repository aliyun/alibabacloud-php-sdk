<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDistResultResponseBody\distResults;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDistResultResponseBody\distResults\distResult\statusStats;

class distResult extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var statusStats
     */
    public $statusStats;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'name' => 'Name',
        'statusStats' => 'StatusStats',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (null !== $this->statusStats) {
            $this->statusStats->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->statusStats) {
            $res['StatusStats'] = null !== $this->statusStats ? $this->statusStats->toArray($noStream) : $this->statusStats;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
