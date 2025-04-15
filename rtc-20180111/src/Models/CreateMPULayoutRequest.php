<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateMPULayoutRequest\panes;

class CreateMPULayoutRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $audioMixCount;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var panes[]
     */
    public $panes;
    protected $_name = [
        'appId' => 'AppId',
        'audioMixCount' => 'AudioMixCount',
        'name' => 'Name',
        'ownerId' => 'OwnerId',
        'panes' => 'Panes',
    ];

    public function validate()
    {
        if (\is_array($this->panes)) {
            Model::validateArray($this->panes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->audioMixCount) {
            $res['AudioMixCount'] = $this->audioMixCount;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->panes) {
            if (\is_array($this->panes)) {
                $res['Panes'] = [];
                $n1 = 0;
                foreach ($this->panes as $item1) {
                    $res['Panes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AudioMixCount'])) {
            $model->audioMixCount = $map['AudioMixCount'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Panes'])) {
            if (!empty($map['Panes'])) {
                $model->panes = [];
                $n1 = 0;
                foreach ($map['Panes'] as $item1) {
                    $model->panes[$n1++] = panes::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
