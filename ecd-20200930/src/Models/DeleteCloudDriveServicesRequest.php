<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DeleteCloudDriveServicesRequest extends Model
{
    /**
     * @var string[]
     */
    public $cdsId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cdsId' => 'CdsId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->cdsId)) {
            Model::validateArray($this->cdsId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdsId) {
            if (\is_array($this->cdsId)) {
                $res['CdsId'] = [];
                $n1 = 0;
                foreach ($this->cdsId as $item1) {
                    $res['CdsId'][$n1] = $item1;
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
        if (isset($map['CdsId'])) {
            if (!empty($map['CdsId'])) {
                $model->cdsId = [];
                $n1 = 0;
                foreach ($map['CdsId'] as $item1) {
                    $model->cdsId[$n1] = $item1;
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
