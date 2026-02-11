<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models\CreateRetcodeAppResponseBody;

use AlibabaCloud\Dara\Model;

class retcodeAppDataBean extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $pid;
    protected $_name = [
        'appId' => 'AppId',
        'pid' => 'Pid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        return $model;
    }
}
