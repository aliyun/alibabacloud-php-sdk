<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class BatchDeleteVsDomainConfigsRequest extends Model
{
    /**
     * @var string
     */
    public $domainNames;

    /**
     * @var string
     */
    public $functionNames;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'domainNames' => 'DomainNames',
        'functionNames' => 'FunctionNames',
        'ownerId' => 'OwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainNames) {
            $res['DomainNames'] = $this->domainNames;
        }

        if (null !== $this->functionNames) {
            $res['FunctionNames'] = $this->functionNames;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (isset($map['DomainNames'])) {
            $model->domainNames = $map['DomainNames'];
        }

        if (isset($map['FunctionNames'])) {
            $model->functionNames = $map['FunctionNames'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
