<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class GrantRevokeFailureEntry extends Model
{
    /**
     * @var ErrorDetail
     */
    public $errorDetail;

    /**
     * @var GrantRevokeEntry
     */
    public $grantRevokeEntry;
    protected $_name = [
        'errorDetail'      => 'ErrorDetail',
        'grantRevokeEntry' => 'GrantRevokeEntry',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorDetail) {
            $res['ErrorDetail'] = null !== $this->errorDetail ? $this->errorDetail->toMap() : null;
        }
        if (null !== $this->grantRevokeEntry) {
            $res['GrantRevokeEntry'] = null !== $this->grantRevokeEntry ? $this->grantRevokeEntry->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrantRevokeFailureEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorDetail'])) {
            $model->errorDetail = ErrorDetail::fromMap($map['ErrorDetail']);
        }
        if (isset($map['GrantRevokeEntry'])) {
            $model->grantRevokeEntry = GrantRevokeEntry::fromMap($map['GrantRevokeEntry']);
        }

        return $model;
    }
}
