<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Beian\V20160810\Models\DeleteUnbeianIpCheckTypeResponseBody;

use AlibabaCloud\Tea\Model;

class huntressIpCheckTypeResultDO extends Model
{
    /**
     * @var string
     */
    public $msg;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'msg'     => 'Msg',
        'success' => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return huntressIpCheckTypeResultDO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
