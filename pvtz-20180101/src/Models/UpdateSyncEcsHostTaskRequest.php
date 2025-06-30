<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\UpdateSyncEcsHostTaskRequest\region;

class UpdateSyncEcsHostTaskRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var region[]
     */
    public $region;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'lang' => 'Lang',
        'region' => 'Region',
        'status' => 'Status',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->region)) {
            Model::validateArray($this->region);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->region) {
            if (\is_array($this->region)) {
                $res['Region'] = [];
                $n1 = 0;
                foreach ($this->region as $item1) {
                    $res['Region'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Region'])) {
            if (!empty($map['Region'])) {
                $model->region = [];
                $n1 = 0;
                foreach ($map['Region'] as $item1) {
                    $model->region[$n1] = region::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
