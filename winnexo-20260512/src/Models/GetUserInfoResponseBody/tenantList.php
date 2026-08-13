<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\GetUserInfoResponseBody;

use AlibabaCloud\Dara\Model;

class tenantList extends Model
{
    /**
     * @var string
     */
    public $crmType;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $tenantName;

    /**
     * @var string
     */
    public $tenantType;
    protected $_name = [
        'crmType' => 'crmType',
        'tenantId' => 'tenantId',
        'tenantName' => 'tenantName',
        'tenantType' => 'tenantType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->crmType) {
            $res['crmType'] = $this->crmType;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->tenantName) {
            $res['tenantName'] = $this->tenantName;
        }

        if (null !== $this->tenantType) {
            $res['tenantType'] = $this->tenantType;
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
        if (isset($map['crmType'])) {
            $model->crmType = $map['crmType'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['tenantName'])) {
            $model->tenantName = $map['tenantName'];
        }

        if (isset($map['tenantType'])) {
            $model->tenantType = $map['tenantType'];
        }

        return $model;
    }
}
