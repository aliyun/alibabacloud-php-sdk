<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetRetcodeLogstoreResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRetcodeLogstoreResponseBody\data\retcodeSLSConfig;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example retcode app or task can not be found!
     *
     * @var string
     */
    public $message;

    /**
     * @var retcodeSLSConfig
     */
    public $retcodeSLSConfig;

    /**
     * @example true
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->retcodeSLSConfig) {
            $res['RetcodeSLSConfig'] = null !== $this->retcodeSLSConfig ? $this->retcodeSLSConfig->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
