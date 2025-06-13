<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;

class RemoveEntriesFromAclRequest extends Model
{
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
     * @var string[]
     */
    public $entries;
    protected $_name = [
        'aclId' => 'AclId',
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'entries' => 'Entries',
    ];

    public function validate()
    {
        if (\is_array($this->entries)) {
            Model::validateArray($this->entries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->entries) {
            if (\is_array($this->entries)) {
                $res['Entries'] = [];
                $n1 = 0;
                foreach ($this->entries as $item1) {
                    $res['Entries'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['Entries'])) {
            if (!empty($map['Entries'])) {
                $model->entries = [];
                $n1 = 0;
                foreach ($map['Entries'] as $item1) {
                    $model->entries[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
