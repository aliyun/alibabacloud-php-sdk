<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Dara\Model;

class DeleteErRouteMapRequest extends Model
{
    /**
     * @var string
     */
    public $erId;

    /**
     * @var string[]
     */
    public $erRouteMapIds;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'erId' => 'ErId',
        'erRouteMapIds' => 'ErRouteMapIds',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->erRouteMapIds)) {
            Model::validateArray($this->erRouteMapIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->erId) {
            $res['ErId'] = $this->erId;
        }

        if (null !== $this->erRouteMapIds) {
            if (\is_array($this->erRouteMapIds)) {
                $res['ErRouteMapIds'] = [];
                $n1 = 0;
                foreach ($this->erRouteMapIds as $item1) {
                    $res['ErRouteMapIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ErId'])) {
            $model->erId = $map['ErId'];
        }

        if (isset($map['ErRouteMapIds'])) {
            if (!empty($map['ErRouteMapIds'])) {
                $model->erRouteMapIds = [];
                $n1 = 0;
                foreach ($map['ErRouteMapIds'] as $item1) {
                    $model->erRouteMapIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
