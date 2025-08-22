<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\AddPrometheusGlobalViewResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddPrometheusGlobalViewResponseBody\data\info;

class data extends Model
{
    /**
     * @var info
     */
    public $info;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'info' => 'Info',
        'msg' => 'Msg',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->info) {
            $this->info->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->info) {
            $res['Info'] = null !== $this->info ? $this->info->toArray($noStream) : $this->info;
        }

        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Info'])) {
            $model->info = info::fromMap($map['Info']);
        }

        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
