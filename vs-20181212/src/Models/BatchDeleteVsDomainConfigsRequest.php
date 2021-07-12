<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class BatchDeleteVsDomainConfigsRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $domainNames;

    /**
     * @var string
     */
    public $functionNames;
    protected $_name = [
        'ownerId'       => 'OwnerId',
        'domainNames'   => 'DomainNames',
        'functionNames' => 'FunctionNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->domainNames) {
            $res['DomainNames'] = $this->domainNames;
        }
        if (null !== $this->functionNames) {
            $res['FunctionNames'] = $this->functionNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchDeleteVsDomainConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['DomainNames'])) {
            $model->domainNames = $map['DomainNames'];
        }
        if (isset($map['FunctionNames'])) {
            $model->functionNames = $map['FunctionNames'];
        }

        return $model;
    }
}
