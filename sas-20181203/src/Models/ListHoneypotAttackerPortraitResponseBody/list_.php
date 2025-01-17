<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotAttackerPortraitResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotAttackerPortraitResponseBody\list_\network;

class list_ extends Model
{
    /**
     * @var int
     */
    public $attackCount;
    /**
     * @var string[]
     */
    public $browser;
    /**
     * @var string[]
     */
    public $host;
    /**
     * @var int
     */
    public $lastTime;
    /**
     * @var network
     */
    public $network;
    /**
     * @var string
     */
    public $portraitId;
    /**
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
        if (\is_array($this->browser)) {
            Model::validateArray($this->browser);
        }
        if (\is_array($this->host)) {
            Model::validateArray($this->host);
        }
        if (null !== $this->network) {
            $this->network->validate();
        }
        if (\is_array($this->social)) {
            Model::validateArray($this->social);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackCount) {
            $res['AttackCount'] = $this->attackCount;
        }

        if (null !== $this->browser) {
            if (\is_array($this->browser)) {
                $res['Browser'] = [];
                $n1             = 0;
                foreach ($this->browser as $item1) {
                    $res['Browser'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->host) {
            if (\is_array($this->host)) {
                $res['Host'] = [];
                $n1          = 0;
                foreach ($this->host as $item1) {
                    $res['Host'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }

        if (null !== $this->network) {
            $res['Network'] = null !== $this->network ? $this->network->toArray($noStream) : $this->network;
        }

        if (null !== $this->portraitId) {
            $res['PortraitId'] = $this->portraitId;
        }

        if (null !== $this->social) {
            if (\is_array($this->social)) {
                $res['Social'] = [];
                $n1            = 0;
                foreach ($this->social as $item1) {
                    $res['Social'][$n1++] = $item1;
                }
            }
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
        if (isset($map['AttackCount'])) {
            $model->attackCount = $map['AttackCount'];
        }

        if (isset($map['Browser'])) {
            if (!empty($map['Browser'])) {
                $model->browser = [];
                $n1             = 0;
                foreach ($map['Browser'] as $item1) {
                    $model->browser[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Host'])) {
            if (!empty($map['Host'])) {
                $model->host = [];
                $n1          = 0;
                foreach ($map['Host'] as $item1) {
                    $model->host[$n1++] = $item1;
                }
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
                $model->social = [];
                $n1            = 0;
                foreach ($map['Social'] as $item1) {
                    $model->social[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
