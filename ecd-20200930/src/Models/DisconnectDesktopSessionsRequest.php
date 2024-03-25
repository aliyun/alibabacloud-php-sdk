<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DisconnectDesktopSessionsRequest\sessions;
use AlibabaCloud\Tea\Model;

class DisconnectDesktopSessionsRequest extends Model
{
    /**
     * @description Specifies whether to perform precheck. If you perform precheck, the system does not disconnect from desktop sessions. Only the sessions that do not meet specific conditions are returned.
     *
     * @example true
     *
     * @var bool
     */
    public $preCheck;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~196646~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The session details.
     *
     * @var sessions[]
     */
    public $sessions;
    protected $_name = [
        'preCheck' => 'PreCheck',
        'regionId' => 'RegionId',
        'sessions' => 'Sessions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->preCheck) {
            $res['PreCheck'] = $this->preCheck;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sessions) {
            $res['Sessions'] = [];
            if (null !== $this->sessions && \is_array($this->sessions)) {
                $n = 0;
                foreach ($this->sessions as $item) {
                    $res['Sessions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisconnectDesktopSessionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PreCheck'])) {
            $model->preCheck = $map['PreCheck'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Sessions'])) {
            if (!empty($map['Sessions'])) {
                $model->sessions = [];
                $n               = 0;
                foreach ($map['Sessions'] as $item) {
                    $model->sessions[$n++] = null !== $item ? sessions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
