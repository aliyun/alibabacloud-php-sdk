<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class SetDcdnFullDomainsBlockIPRequest extends Model
{
    /**
     * @var int
     */
    public $blockInterval;

    /**
     * @var string
     */
    public $IPList;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'blockInterval' => 'BlockInterval',
        'IPList'        => 'IPList',
        'operationType' => 'OperationType',
        'ownerId'       => 'OwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockInterval) {
            $res['BlockInterval'] = $this->blockInterval;
        }
        if (null !== $this->IPList) {
            $res['IPList'] = $this->IPList;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDcdnFullDomainsBlockIPRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockInterval'])) {
            $model->blockInterval = $map['BlockInterval'];
        }
        if (isset($map['IPList'])) {
            $model->IPList = $map['IPList'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
