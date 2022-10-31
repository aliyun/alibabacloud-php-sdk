<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CopyCasterRequest extends Model
{
    /**
     * @var string
     */
    public $casterName;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $srcCasterId;
    protected $_name = [
        'casterName'  => 'CasterName',
        'clientToken' => 'ClientToken',
        'ownerId'     => 'OwnerId',
        'srcCasterId' => 'SrcCasterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterName) {
            $res['CasterName'] = $this->casterName;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->srcCasterId) {
            $res['SrcCasterId'] = $this->srcCasterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopyCasterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterName'])) {
            $model->casterName = $map['CasterName'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SrcCasterId'])) {
            $model->srcCasterId = $map['SrcCasterId'];
        }

        return $model;
    }
}
