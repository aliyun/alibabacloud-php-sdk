<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\RemoveEntriesFromAclRequest\aclEntries;

class RemoveEntriesFromAclRequest extends Model
{
    /**
     * @var aclEntries[]
     */
    public $aclEntries;

    /**
     * @var string
     */
    public $aclId;

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
    public $regionId;
    protected $_name = [
        'aclEntries' => 'AclEntries',
        'aclId' => 'AclId',
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->aclEntries)) {
            Model::validateArray($this->aclEntries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclEntries) {
            if (\is_array($this->aclEntries)) {
                $res['AclEntries'] = [];
                $n1 = 0;
                foreach ($this->aclEntries as $item1) {
                    $res['AclEntries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
        if (isset($map['AclEntries'])) {
            if (!empty($map['AclEntries'])) {
                $model->aclEntries = [];
                $n1 = 0;
                foreach ($map['AclEntries'] as $item1) {
                    $model->aclEntries[$n1] = aclEntries::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
