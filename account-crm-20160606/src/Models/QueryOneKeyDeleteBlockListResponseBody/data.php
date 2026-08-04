<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryOneKeyDeleteBlockListResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $blockCode;

    /**
     * @var string
     */
    public $blockMsg;
    protected $_name = [
        'blockCode' => 'BlockCode',
        'blockMsg' => 'BlockMsg',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockCode) {
            $res['BlockCode'] = $this->blockCode;
        }

        if (null !== $this->blockMsg) {
            $res['BlockMsg'] = $this->blockMsg;
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
        if (isset($map['BlockCode'])) {
            $model->blockCode = $map['BlockCode'];
        }

        if (isset($map['BlockMsg'])) {
            $model->blockMsg = $map['BlockMsg'];
        }

        return $model;
    }
}
