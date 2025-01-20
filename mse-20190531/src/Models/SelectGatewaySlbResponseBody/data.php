<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\SelectGatewaySlbResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $slbId;
    /**
     * @var string
     */
    public $slbName;
    protected $_name = [
        'slbId'   => 'SlbId',
        'slbName' => 'SlbName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
        }

        if (null !== $this->slbName) {
            $res['SlbName'] = $this->slbName;
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
        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }

        if (isset($map['SlbName'])) {
            $model->slbName = $map['SlbName'];
        }

        return $model;
    }
}
