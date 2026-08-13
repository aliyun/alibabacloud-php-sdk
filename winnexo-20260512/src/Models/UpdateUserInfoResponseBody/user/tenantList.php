<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateUserInfoResponseBody\user;

use AlibabaCloud\Dara\Model;

class tenantList extends Model
{
    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $tenantName;
    protected $_name = [
        'tenantId' => 'tenantId',
        'tenantName' => 'tenantName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->tenantName) {
            $res['tenantName'] = $this->tenantName;
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
        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['tenantName'])) {
            $model->tenantName = $map['tenantName'];
        }

        return $model;
    }
}
