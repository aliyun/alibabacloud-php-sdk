<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\AddEntriesToAclRequest\aclEntries;

class AddEntriesToAclRequest extends Model
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
    protected $_name = [
        'aclEntries'  => 'AclEntries',
        'aclId'       => 'AclId',
        'clientToken' => 'ClientToken',
        'dryRun'      => 'DryRun',
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
                $n1                = 0;
                foreach ($this->aclEntries as $item1) {
                    $res['AclEntries'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1                = 0;
                foreach ($map['AclEntries'] as $item1) {
                    $model->aclEntries[$n1++] = aclEntries::fromMap($item1);
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

        return $model;
    }
}
