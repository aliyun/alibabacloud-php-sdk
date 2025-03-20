<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListInstanceQuotasResponseBody;

use AlibabaCloud\Tea\Model;

class quotas extends Model
{
    /**
     * @description The quota name.
     *
     * @example customHttpCert
     *
     * @var string
     */
    public $quotaName;

    /**
     * @description The quota value.
     *
     * @example 10
     *
     * @var string
     */
    public $quotaValue;

    /**
     * @description The threshold type of the quota. Valid values:
     *
     *   value: enumerates the values of the quota.
     *   bool: specifies whether the quota is available.
     *   num: the upper limit of the quota.
     *   range: the value range for the quota.
     *   custom: other types than the preceding four quota threshold types.
     *
     * @example bool
     *
     * @var string
     */
    public $quotaValueType;
    protected $_name = [
        'quotaName' => 'QuotaName',
        'quotaValue' => 'QuotaValue',
        'quotaValueType' => 'QuotaValueType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->quotaName) {
            $res['QuotaName'] = $this->quotaName;
        }
        if (null !== $this->quotaValue) {
            $res['QuotaValue'] = $this->quotaValue;
        }
        if (null !== $this->quotaValueType) {
            $res['QuotaValueType'] = $this->quotaValueType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return quotas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QuotaName'])) {
            $model->quotaName = $map['QuotaName'];
        }
        if (isset($map['QuotaValue'])) {
            $model->quotaValue = $map['QuotaValue'];
        }
        if (isset($map['QuotaValueType'])) {
            $model->quotaValueType = $map['QuotaValueType'];
        }

        return $model;
    }
}
