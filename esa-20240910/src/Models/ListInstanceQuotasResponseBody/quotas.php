<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListInstanceQuotasResponseBody;

use AlibabaCloud\Dara\Model;

class quotas extends Model
{
    /**
     * @var string
     */
    public $quotaName;
    /**
     * @var string
     */
    public $quotaValue;
    /**
     * @var string
     */
    public $quotaValueType;
    protected $_name = [
        'quotaName'      => 'QuotaName',
        'quotaValue'     => 'QuotaValue',
        'quotaValueType' => 'QuotaValueType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
