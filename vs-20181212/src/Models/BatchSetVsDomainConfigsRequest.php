<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class BatchSetVsDomainConfigsRequest extends Model
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
    public $functions;
    protected $_name = [
        'ownerId'     => 'OwnerId',
        'domainNames' => 'DomainNames',
        'functions'   => 'Functions',
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
        if (null !== $this->functions) {
            $res['Functions'] = $this->functions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchSetVsDomainConfigsRequest
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
        if (isset($map['Functions'])) {
            $model->functions = $map['Functions'];
        }

        return $model;
    }
}
