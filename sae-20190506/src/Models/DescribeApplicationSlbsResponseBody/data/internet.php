<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationSlbsResponseBody\data;

use AlibabaCloud\Tea\Model;

class internet extends Model
{
    /**
     * @var string
     */
    public $httpsCertId;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var int
     */
    public $targetPort;
    protected $_name = [
        'httpsCertId' => 'HttpsCertId',
        'port'        => 'Port',
        'protocol'    => 'Protocol',
        'targetPort'  => 'TargetPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpsCertId) {
            $res['HttpsCertId'] = $this->httpsCertId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->targetPort) {
            $res['TargetPort'] = $this->targetPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return internet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HttpsCertId'])) {
            $model->httpsCertId = $map['HttpsCertId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['TargetPort'])) {
            $model->targetPort = $map['TargetPort'];
        }

        return $model;
    }
}
