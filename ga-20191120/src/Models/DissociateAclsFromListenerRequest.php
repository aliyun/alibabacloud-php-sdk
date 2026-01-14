<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;

class DissociateAclsFromListenerRequest extends Model
{
    /**
     * @var string[]
     */
    public $aclIds;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $listenerId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'aclIds' => 'AclIds',
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'listenerId' => 'ListenerId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->aclIds)) {
            Model::validateArray($this->aclIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclIds) {
            if (\is_array($this->aclIds)) {
                $res['AclIds'] = [];
                $n1 = 0;
                foreach ($this->aclIds as $item1) {
                    $res['AclIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
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
        if (isset($map['AclIds'])) {
            if (!empty($map['AclIds'])) {
                $model->aclIds = [];
                $n1 = 0;
                foreach ($map['AclIds'] as $item1) {
                    $model->aclIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
