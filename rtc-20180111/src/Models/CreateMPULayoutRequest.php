<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateMPULayoutRequest\panes;
use AlibabaCloud\Tea\Model;

class CreateMPULayoutRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $showLog;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $audioMixCount;

    /**
     * @var panes[]
     */
    public $panes;
    protected $_name = [
        'ownerId'       => 'OwnerId',
        'showLog'       => 'ShowLog',
        'appId'         => 'AppId',
        'name'          => 'Name',
        'audioMixCount' => 'AudioMixCount',
        'panes'         => 'Panes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->showLog) {
            $res['ShowLog'] = $this->showLog;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->audioMixCount) {
            $res['AudioMixCount'] = $this->audioMixCount;
        }
        if (null !== $this->panes) {
            $res['Panes'] = [];
            if (null !== $this->panes && \is_array($this->panes)) {
                $n = 0;
                foreach ($this->panes as $item) {
                    $res['Panes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMPULayoutRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ShowLog'])) {
            $model->showLog = $map['ShowLog'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['AudioMixCount'])) {
            $model->audioMixCount = $map['AudioMixCount'];
        }
        if (isset($map['Panes'])) {
            if (!empty($map['Panes'])) {
                $model->panes = [];
                $n            = 0;
                foreach ($map['Panes'] as $item) {
                    $model->panes[$n++] = null !== $item ? panes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
