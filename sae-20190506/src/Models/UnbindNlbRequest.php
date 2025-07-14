<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class UnbindNlbRequest extends Model
{
    /**
     * @description A short description of struct
     *
     * @example 7171a6ca-d1cd-4928-8642-7d5cfe69****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of NLB instance.
     *
     * @example nlb-7z7jjbzz44d82c9***
     *
     * @var string
     */
    public $nlbId;

    /**
     * @description The listener port of the instance. Valid values: 0 to 65535.
     *
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @description The type of the protocol. Valid values:
     *
     *   **TCP**.
     *   **UDP**.
     *   **TCPSSL**.
     *
     * @example TCP
     *
     * @var string
     */
    public $protocol;
    protected $_name = [
        'appId' => 'AppId',
        'nlbId' => 'NlbId',
        'port' => 'Port',
        'protocol' => 'Protocol',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->nlbId) {
            $res['NlbId'] = $this->nlbId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnbindNlbRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['NlbId'])) {
            $model->nlbId = $map['NlbId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
