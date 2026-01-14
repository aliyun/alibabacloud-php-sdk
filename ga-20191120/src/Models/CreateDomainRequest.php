<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;

class CreateDomainRequest extends Model
{
    /**
     * @var string[]
     */
    public $acceleratorIds;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'acceleratorIds' => 'AcceleratorIds',
        'domain' => 'Domain',
        'dryRun' => 'DryRun',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->acceleratorIds)) {
            Model::validateArray($this->acceleratorIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceleratorIds) {
            if (\is_array($this->acceleratorIds)) {
                $res['AcceleratorIds'] = [];
                $n1 = 0;
                foreach ($this->acceleratorIds as $item1) {
                    $res['AcceleratorIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
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
        if (isset($map['AcceleratorIds'])) {
            if (!empty($map['AcceleratorIds'])) {
                $model->acceleratorIds = [];
                $n1 = 0;
                foreach ($map['AcceleratorIds'] as $item1) {
                    $model->acceleratorIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
