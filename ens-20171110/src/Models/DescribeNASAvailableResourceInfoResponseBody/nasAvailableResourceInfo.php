<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNASAvailableResourceInfoResponseBody;

use AlibabaCloud\Dara\Model;

class nasAvailableResourceInfo extends Model
{
    /**
     * @var string[]
     */
    public $ability;

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
    public $ensRegionName;

    /**
     * @var int
     */
    public $nasAvailableAmount;

    /**
     * @var string
     */
    public $nasAvailableStorgeType;

    /**
     * @var string
     */
    public $province;
    protected $_name = [
        'ability' => 'Ability',
        'area' => 'Area',
        'enName' => 'EnName',
        'ensRegionId' => 'EnsRegionId',
        'ensRegionName' => 'EnsRegionName',
        'nasAvailableAmount' => 'NasAvailableAmount',
        'nasAvailableStorgeType' => 'NasAvailableStorgeType',
        'province' => 'Province',
    ];

    public function validate()
    {
        if (\is_array($this->ability)) {
            Model::validateArray($this->ability);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ability) {
            if (\is_array($this->ability)) {
                $res['Ability'] = [];
                $n1 = 0;
                foreach ($this->ability as $item1) {
                    $res['Ability'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }

        if (null !== $this->enName) {
            $res['EnName'] = $this->enName;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->ensRegionName) {
            $res['EnsRegionName'] = $this->ensRegionName;
        }

        if (null !== $this->nasAvailableAmount) {
            $res['NasAvailableAmount'] = $this->nasAvailableAmount;
        }

        if (null !== $this->nasAvailableStorgeType) {
            $res['NasAvailableStorgeType'] = $this->nasAvailableStorgeType;
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
        if (isset($map['Ability'])) {
            if (!empty($map['Ability'])) {
                $model->ability = [];
                $n1 = 0;
                foreach ($map['Ability'] as $item1) {
                    $model->ability[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }

        if (isset($map['EnName'])) {
            $model->enName = $map['EnName'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['EnsRegionName'])) {
            $model->ensRegionName = $map['EnsRegionName'];
        }

        if (isset($map['NasAvailableAmount'])) {
            $model->nasAvailableAmount = $map['NasAvailableAmount'];
        }

        if (isset($map['NasAvailableStorgeType'])) {
            $model->nasAvailableStorgeType = $map['NasAvailableStorgeType'];
        }

        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
