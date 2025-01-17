<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeSimilarEventScenariosRequest extends Model
{
    /**
     * @var int
     */
    public $resourceOwnerId;
    /**
     * @var int
     */
    public $securityEventId;
    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'resourceOwnerId' => 'ResourceOwnerId',
        'securityEventId' => 'SecurityEventId',
        'sourceIp'        => 'SourceIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->securityEventId) {
            $res['SecurityEventId'] = $this->securityEventId;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SecurityEventId'])) {
            $model->securityEventId = $map['SecurityEventId'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
