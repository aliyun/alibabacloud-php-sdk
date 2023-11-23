<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class QuotaIdName extends Model
{
    /**
     * @example quota12345
     *
     * @var string
     */
    public $quotaId;

    /**
     * @example dlc-quota
     *
     * @var string
     */
    public $quotaName;
    protected $_name = [
        'quotaId'   => 'QuotaId',
        'quotaName' => 'QuotaName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->quotaId) {
            $res['QuotaId'] = $this->quotaId;
        }
        if (null !== $this->quotaName) {
            $res['QuotaName'] = $this->quotaName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuotaIdName
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QuotaId'])) {
            $model->quotaId = $map['QuotaId'];
        }
        if (isset($map['QuotaName'])) {
            $model->quotaName = $map['QuotaName'];
        }

        return $model;
    }
}
