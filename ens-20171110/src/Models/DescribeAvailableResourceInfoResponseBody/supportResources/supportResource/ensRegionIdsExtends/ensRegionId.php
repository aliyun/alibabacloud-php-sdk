<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponseBody\supportResources\supportResource\ensRegionIdsExtends;

use AlibabaCloud\Dara\Model;

class ensRegionId extends Model
{
    /**
     * @var string
     */
    public $area;

    /**
     * @var string
     */
    public $enName;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $isp;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $province;
    protected $_name = [
        'area' => 'Area',
        'enName' => 'EnName',
        'ensRegionId' => 'EnsRegionId',
        'isp' => 'Isp',
        'name' => 'Name',
        'province' => 'Province',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }

        if (null !== $this->enName) {
            $res['EnName'] = $this->enName;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->province) {
            $res['Province'] = $this->province;
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
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }

        if (isset($map['EnName'])) {
            $model->enName = $map['EnName'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
