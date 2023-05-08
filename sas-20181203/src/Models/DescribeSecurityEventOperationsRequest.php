<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSecurityEventOperationsRequest extends Model
{
    /**
     * @description The value of the field that can be used in the whitelist rule.
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The field that can be used in the whitelist rule.
     *
     * @example 61352054
     *
     * @var int
     */
    public $securityEventId;

    /**
     * @description The operation that is supported in the whitelist rule. Valid values:
     *
     *   **contains**: contains
     *   **notContains**: does not contain
     *   **regex**: regular expression
     *   **strEqual**: equals
     *   **strNotEqual**: does not equal
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'lang'            => 'Lang',
        'resourceOwnerId' => 'ResourceOwnerId',
        'securityEventId' => 'SecurityEventId',
        'sourceIp'        => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
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

    /**
     * @param array $map
     *
     * @return DescribeSecurityEventOperationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
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
