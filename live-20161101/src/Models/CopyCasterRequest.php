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
    public $srcCasterId;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'casterName'  => 'CasterName',
        'srcCasterId' => 'SrcCasterId',
        'clientToken' => 'ClientToken',
    ];

    public function validate()
    {
        Model::validateRequired('casterName', $this->casterName, true);
        Model::validateRequired('srcCasterId', $this->srcCasterId, true);
        Model::validateRequired('clientToken', $this->clientToken, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterName) {
            $res['CasterName'] = $this->casterName;
        }
        if (null !== $this->srcCasterId) {
            $res['SrcCasterId'] = $this->srcCasterId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
        if (isset($map['SrcCasterId'])) {
            $model->srcCasterId = $map['SrcCasterId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
