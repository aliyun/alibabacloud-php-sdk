<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeTrafficInfoResponseBody;

use AlibabaCloud\Tea\Model;

class trafficInfo extends Model
{
    /**
     * @var int
     */
    public $lastUsedTraffic;

    /**
     * @var int
     */
    public $addTraffic;

    /**
     * @var int
     */
    public $usableTraffic;
    protected $_name = [
        'lastUsedTraffic' => 'LastUsedTraffic',
        'addTraffic'      => 'AddTraffic',
        'usableTraffic'   => 'UsableTraffic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastUsedTraffic) {
            $res['LastUsedTraffic'] = $this->lastUsedTraffic;
        }
        if (null !== $this->addTraffic) {
            $res['AddTraffic'] = $this->addTraffic;
        }
        if (null !== $this->usableTraffic) {
            $res['UsableTraffic'] = $this->usableTraffic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LastUsedTraffic'])) {
            $model->lastUsedTraffic = $map['LastUsedTraffic'];
        }
        if (isset($map['AddTraffic'])) {
            $model->addTraffic = $map['AddTraffic'];
        }
        if (isset($map['UsableTraffic'])) {
            $model->usableTraffic = $map['UsableTraffic'];
        }

        return $model;
    }
}
