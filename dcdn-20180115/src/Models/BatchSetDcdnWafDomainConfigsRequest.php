<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;

class BatchSetDcdnWafDomainConfigsRequest extends Model
{
    /**
     * @var string
     */
    public $clientIpTag;

    /**
     * @var string
     */
    public $defenseStatus;

    /**
     * @var string
     */
    public $domainNames;
    protected $_name = [
        'clientIpTag' => 'ClientIpTag',
        'defenseStatus' => 'DefenseStatus',
        'domainNames' => 'DomainNames',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientIpTag) {
            $res['ClientIpTag'] = $this->clientIpTag;
        }

        if (null !== $this->defenseStatus) {
            $res['DefenseStatus'] = $this->defenseStatus;
        }

        if (null !== $this->domainNames) {
            $res['DomainNames'] = $this->domainNames;
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
        if (isset($map['ClientIpTag'])) {
            $model->clientIpTag = $map['ClientIpTag'];
        }

        if (isset($map['DefenseStatus'])) {
            $model->defenseStatus = $map['DefenseStatus'];
        }

        if (isset($map['DomainNames'])) {
            $model->domainNames = $map['DomainNames'];
        }

        return $model;
    }
}
