<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class SetCdnFullDomainsBlockIPRequest extends Model
{
    /**
     * @description The duration for which IP addresses or CIDR blocks are blocked. Unit: seconds. The value **0** specifies that IP addresses or CIDR blocks are permanently blocked. This parameter is available only if you set **OperationType** to **block**.
     *
     * @example 3000
     *
     * @var int
     */
    public $blockInterval;

    /**
     * @description The IP addresses that you want to block or unblock. Separate multiple IP addresses with commas (,). You can specify up to 1,000 IP addresses.
     *
     * This parameter is required.
     *
     * @example 1.XXX.XXX.1,2.XXX.XXX.2
     *
     * @var string
     */
    public $IPList;

    /**
     * @description The type of the operation.
     *
     *   block
     *   unblock
     *
     * This parameter is required.
     *
     * @example block
     *
     * @var string
     */
    public $operationType;

    /**
     * @description The type of the blocking duration. This parameter is available only if you set **OperationType** to **block**. Valid values:
     *
     *   **cover**: The blocking duration that is specified in the request takes effect.
     *   **uncover**: The longer one of the blocking duration that is specified in the request and the remaining blocking duration takes effect.
     *   Default value: cover.
     *
     * @example cover
     *
     * @var string
     */
    public $updateType;
    protected $_name = [
        'blockInterval' => 'BlockInterval',
        'IPList' => 'IPList',
        'operationType' => 'OperationType',
        'updateType' => 'UpdateType',
    ];

    public function validate() {}

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
     * @return SetCdnFullDomainsBlockIPRequest
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
