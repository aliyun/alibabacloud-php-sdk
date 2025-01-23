<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class QuotaIdName extends Model
{
    /**
     * @var string
     */
    public $quotaId;
    /**
     * @var string
     */
    public $quotaName;
    protected $_name = [
        'quotaId'   => 'QuotaId',
        'quotaName' => 'QuotaName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
