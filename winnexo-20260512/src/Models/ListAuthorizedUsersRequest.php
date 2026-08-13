<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class ListAuthorizedUsersRequest extends Model
{
    /**
     * @var string
     */
    public $granteeType;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $operatingObjectName;

    /**
     * @var string
     */
    public $permission;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'granteeType' => 'granteeType',
        'keyword' => 'keyword',
        'operatingObjectName' => 'operatingObjectName',
        'permission' => 'permission',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->granteeType) {
            $res['granteeType'] = $this->granteeType;
        }

        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }

        if (null !== $this->operatingObjectName) {
            $res['operatingObjectName'] = $this->operatingObjectName;
        }

        if (null !== $this->permission) {
            $res['permission'] = $this->permission;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['granteeType'])) {
            $model->granteeType = $map['granteeType'];
        }

        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }

        if (isset($map['operatingObjectName'])) {
            $model->operatingObjectName = $map['operatingObjectName'];
        }

        if (isset($map['permission'])) {
            $model->permission = $map['permission'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
