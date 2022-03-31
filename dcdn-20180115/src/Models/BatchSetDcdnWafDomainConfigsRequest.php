<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class BatchSetDcdnWafDomainConfigsRequest extends Model
{
    /**
     * @var string
     */
    public $defenseStatus;

    /**
     * @var string
     */
    public $domainNames;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'defenseStatus' => 'DefenseStatus',
        'domainNames'   => 'DomainNames',
        'ownerId'       => 'OwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defenseStatus) {
            $res['DefenseStatus'] = $this->defenseStatus;
        }
        if (null !== $this->domainNames) {
            $res['DomainNames'] = $this->domainNames;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchSetDcdnWafDomainConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefenseStatus'])) {
            $model->defenseStatus = $map['DefenseStatus'];
        }
        if (isset($map['DomainNames'])) {
            $model->domainNames = $map['DomainNames'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
