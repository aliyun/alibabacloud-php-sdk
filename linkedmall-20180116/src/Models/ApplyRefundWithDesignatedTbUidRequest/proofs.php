<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\ApplyRefundWithDesignatedTbUidRequest;

use AlibabaCloud\Tea\Model;

class proofs extends Model
{
    /**
     * @var string
     */
    public $messagePic;

    /**
     * @var string
     */
    public $messagePicDesc;
    protected $_name = [
        'messagePic'     => 'MessagePic',
        'messagePicDesc' => 'MessagePicDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->messagePic) {
            $res['MessagePic'] = $this->messagePic;
        }
        if (null !== $this->messagePicDesc) {
            $res['MessagePicDesc'] = $this->messagePicDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return proofs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MessagePic'])) {
            $model->messagePic = $map['MessagePic'];
        }
        if (isset($map['MessagePicDesc'])) {
            $model->messagePicDesc = $map['MessagePicDesc'];
        }

        return $model;
    }
}
