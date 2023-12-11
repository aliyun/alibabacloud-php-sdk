<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotAttackerPortraitResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotAttackerPortraitResponseBody\list_\network;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The number of attacks.
     *
     * @example 10
     *
     * @var int
     */
    public $attackCount;

    /**
     * @description The information about the browsers of the attack source.
     *
     * @var string[]
     */
    public $browser;

    /**
     * @description The information about the hosts of the attack source.
     *
     * @var string[]
     */
    public $host;

    /**
     * @description The timestamp at which the attack was last detected. Unit: milliseconds.
     *
     * @example 1679896965
     *
     * @var int
     */
    public $lastTime;

    /**
     * @description The network information about the attack source.
     *
     * @var network
     */
    public $network;

    /**
     * @description The attacker profile ID.
     *
     * @example cd48604a-1694-4f03-ade0-ec6994c3****
     *
     * @var string
     */
    public $portraitId;

    /**
     * @description The social information about the attack source.
     *
     * @var string[]
     */
    public $social;
    protected $_name = [
        'attackCount' => 'AttackCount',
        'browser'     => 'Browser',
        'host'        => 'Host',
        'lastTime'    => 'LastTime',
        'network'     => 'Network',
        'portraitId'  => 'PortraitId',
        'social'      => 'Social',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attackCount) {
            $res['AttackCount'] = $this->attackCount;
        }
        if (null !== $this->browser) {
            $res['Browser'] = $this->browser;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }
        if (null !== $this->network) {
            $res['Network'] = null !== $this->network ? $this->network->toMap() : null;
        }
        if (null !== $this->portraitId) {
            $res['PortraitId'] = $this->portraitId;
        }
        if (null !== $this->social) {
            $res['Social'] = $this->social;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttackCount'])) {
            $model->attackCount = $map['AttackCount'];
        }
        if (isset($map['Browser'])) {
            if (!empty($map['Browser'])) {
                $model->browser = $map['Browser'];
            }
        }
        if (isset($map['Host'])) {
            if (!empty($map['Host'])) {
                $model->host = $map['Host'];
            }
        }
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }
        if (isset($map['Network'])) {
            $model->network = network::fromMap($map['Network']);
        }
        if (isset($map['PortraitId'])) {
            $model->portraitId = $map['PortraitId'];
        }
        if (isset($map['Social'])) {
            if (!empty($map['Social'])) {
                $model->social = $map['Social'];
            }
        }

        return $model;
    }
}
