<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateGroupIconRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @example $2$111000
     *
     * @var string
     */
    public $appCid;

    /**
     * @example $iQEMAqNqcGcDAQTNAyAFzQJYBtoAIYQBpAuf1dQCqrY4aIGemoBLONIDzwAAAXazCVSoBM0NyAcACA****
     *
     * @var string
     */
    public $iconMediaId;

    /**
     * @example 80000010
     *
     * @var string
     */
    public $operatorAppUid;
    protected $_name = [
        'appCid'         => 'AppCid',
        'iconMediaId'    => 'IconMediaId',
        'operatorAppUid' => 'OperatorAppUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCid) {
            $res['AppCid'] = $this->appCid;
        }
        if (null !== $this->iconMediaId) {
            $res['IconMediaId'] = $this->iconMediaId;
        }
        if (null !== $this->operatorAppUid) {
            $res['OperatorAppUid'] = $this->operatorAppUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCid'])) {
            $model->appCid = $map['AppCid'];
        }
        if (isset($map['IconMediaId'])) {
            $model->iconMediaId = $map['IconMediaId'];
        }
        if (isset($map['OperatorAppUid'])) {
            $model->operatorAppUid = $map['OperatorAppUid'];
        }

        return $model;
    }
}
