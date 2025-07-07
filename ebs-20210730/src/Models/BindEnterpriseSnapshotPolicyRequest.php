<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Dara\Model;

class BindEnterpriseSnapshotPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string[]
     */
    public $diskTargets;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'diskTargets' => 'DiskTargets',
        'policyId' => 'PolicyId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->diskTargets)) {
            Model::validateArray($this->diskTargets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->diskTargets) {
            if (\is_array($this->diskTargets)) {
                $res['DiskTargets'] = [];
                $n1 = 0;
                foreach ($this->diskTargets as $item1) {
                    $res['DiskTargets'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DiskTargets'])) {
            if (!empty($map['DiskTargets'])) {
                $model->diskTargets = [];
                $n1 = 0;
                foreach ($map['DiskTargets'] as $item1) {
                    $model->diskTargets[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
