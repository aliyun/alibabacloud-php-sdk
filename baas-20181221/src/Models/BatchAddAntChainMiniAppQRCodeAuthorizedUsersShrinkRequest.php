<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class BatchAddAntChainMiniAppQRCodeAuthorizedUsersShrinkRequest extends Model
{
    /**
     * @example bDXK6boZ
     *
     * @var string
     */
    public $antChainId;

    /**
     * @example ["1380013****", "1380013****"]
     *
     * @var string
     */
    public $phoneListShrink;
    protected $_name = [
        'antChainId'      => 'AntChainId',
        'phoneListShrink' => 'PhoneList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
        }
        if (null !== $this->phoneListShrink) {
            $res['PhoneList'] = $this->phoneListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchAddAntChainMiniAppQRCodeAuthorizedUsersShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }
        if (isset($map['PhoneList'])) {
            $model->phoneListShrink = $map['PhoneList'];
        }

        return $model;
    }
}
