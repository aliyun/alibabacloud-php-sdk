<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDestinationIPResponseBody\dstIPList;

use AlibabaCloud\Tea\Model;

class applicationPortList extends Model
{
    /**
     * @description The application type used in the access control policy. Valid values:
     *
     *   **FTP**
     *   **HTTP**
     *   **HTTPS**
     *   **Memcache**
     *   **MongoDB**
     *   **MQTT**
     *   **MySQL**
     *   **RDP**
     *   **Redis**
     *   **SMTP**
     *   **SMTPS**
     *   **SSH**
     *   **SSL_No_Cert**
     *   **SSL**
     *   **VNC**
     *
     * >  The value of this parameter depends on the value of the Proto parameter. If you set Proto to TCP, you can set ApplicationNameList to any valid value. If you configure both ApplicationNameList and ApplicationName, only the value of ApplicationNameList is used.
     *
     * @example HTTP
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description The application port.
     *
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @description List of reasons for failing to analyze the protocol when it is identified as Unknown.
     *
     * @var string[]
     */
    public $unknownReason;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'port' => 'Port',
        'unknownReason' => 'UnknownReason',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->unknownReason) {
            $res['UnknownReason'] = $this->unknownReason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applicationPortList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['UnknownReason'])) {
            if (!empty($map['UnknownReason'])) {
                $model->unknownReason = $map['UnknownReason'];
            }
        }

        return $model;
    }
}
