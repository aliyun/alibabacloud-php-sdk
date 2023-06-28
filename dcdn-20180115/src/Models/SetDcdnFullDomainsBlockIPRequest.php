<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class SetDcdnFullDomainsBlockIPRequest extends Model
{
    /**
     * @description The blocking period. Unit: seconds.
     *
     * > If you set the **OperationType** parameter to **unblock**, you do not need to set this parameter.
     * @example 3000
     *
     * @var int
     */
    public $blockInterval;

    /**
     * @description The IP addresses that are blocked or unblocked. Separate multiple IP addresses with commas (,). You can specify up to 1,000 IP addresses.
     *
     * @example 192.168.0.1,10.10.10.10,172.16.0.1
     *
     * @var string
     */
    public $IPList;

    /**
     * @description The action. Valid values:
     *
     *   **block**
     *   **unblock**
     *
     * @example block
     *
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $updateType;
    protected $_name = [
        'blockInterval' => 'BlockInterval',
        'IPList'        => 'IPList',
        'operationType' => 'OperationType',
        'updateType'    => 'UpdateType',
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
        if (null !== $this->updateType) {
            $res['UpdateType'] = $this->updateType;
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
        if (isset($map['UpdateType'])) {
            $model->updateType = $map['UpdateType'];
        }

        return $model;
    }
}
