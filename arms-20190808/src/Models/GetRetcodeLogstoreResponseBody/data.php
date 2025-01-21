<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetRetcodeLogstoreResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRetcodeLogstoreResponseBody\data\retcodeSLSConfig;

class data extends Model
{
    /**
     * @var string
     */
    public $message;
    /**
     * @var retcodeSLSConfig
     */
    public $retcodeSLSConfig;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'message'          => 'Message',
        'retcodeSLSConfig' => 'RetcodeSLSConfig',
        'status'           => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->retcodeSLSConfig) {
            $this->retcodeSLSConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->retcodeSLSConfig) {
            $res['RetcodeSLSConfig'] = null !== $this->retcodeSLSConfig ? $this->retcodeSLSConfig->toArray($noStream) : $this->retcodeSLSConfig;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RetcodeSLSConfig'])) {
            $model->retcodeSLSConfig = retcodeSLSConfig::fromMap($map['RetcodeSLSConfig']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
