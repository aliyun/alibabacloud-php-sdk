<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;

class SetCdnFullDomainsBlockIPRequest extends Model
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
     * @var string
     */
    public $updateType;
    protected $_name = [
        'blockInterval' => 'BlockInterval',
        'IPList' => 'IPList',
        'operationType' => 'OperationType',
        'updateType' => 'UpdateType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->updateType) {
            $res['UpdateType'] = $this->updateType;
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
        if (isset($map['BlockInterval'])) {
            $model->blockInterval = $map['BlockInterval'];
        }

        if (isset($map['IPList'])) {
            $model->IPList = $map['IPList'];
        }

        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }

        if (isset($map['UpdateType'])) {
            $model->updateType = $map['UpdateType'];
        }

        return $model;
    }
}
