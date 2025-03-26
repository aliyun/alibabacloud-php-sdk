<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DisconnectDesktopSessionsRequest\sessions;

class DisconnectDesktopSessionsRequest extends Model
{
    /**
     * @var bool
     */
    public $preCheck;

    /**
     * @var string
     */
    public $regionId;

    /**
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
        if (\is_array($this->sessions)) {
            Model::validateArray($this->sessions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->preCheck) {
            $res['PreCheck'] = $this->preCheck;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sessions) {
            if (\is_array($this->sessions)) {
                $res['Sessions'] = [];
                $n1 = 0;
                foreach ($this->sessions as $item1) {
                    $res['Sessions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PreCheck'])) {
            $model->preCheck = $map['PreCheck'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Sessions'])) {
            if (!empty($map['Sessions'])) {
                $model->sessions = [];
                $n1 = 0;
                foreach ($map['Sessions'] as $item1) {
                    $model->sessions[$n1++] = sessions::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
