<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;

class DeleteIpSetsRequest extends Model
{
    /**
     * @var string[]
     */
    public $ipSetIds;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'ipSetIds' => 'IpSetIds',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->ipSetIds)) {
            Model::validateArray($this->ipSetIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipSetIds) {
            if (\is_array($this->ipSetIds)) {
                $res['IpSetIds'] = [];
                $n1 = 0;
                foreach ($this->ipSetIds as $item1) {
                    $res['IpSetIds'][$n1] = $item1;
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
        if (isset($map['IpSetIds'])) {
            if (!empty($map['IpSetIds'])) {
                $model->ipSetIds = [];
                $n1 = 0;
                foreach ($map['IpSetIds'] as $item1) {
                    $model->ipSetIds[$n1] = $item1;
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
