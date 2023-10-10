<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceConsumersPageResponseBody\data;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description The name of the service consumer.
     *
     * @example k8s-lq-cartservice
     *
     * @var string
     */
    public $edasAppName;

    /**
     * @description The ID of the service consumer.
     *
     * @example efbda488-7b33-432f-a40d-****0047****
     *
     * @var string
     */
    public $edassAppId;

    /**
     * @description The IP address of the service consumer.
     *
     * @example 10.20.x.xx
     *
     * @var string
     */
    public $ip;
    protected $_name = [
        'edasAppName' => 'EdasAppName',
        'edassAppId'  => 'EdassAppId',
        'ip'          => 'Ip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->edasAppName) {
            $res['EdasAppName'] = $this->edasAppName;
        }
        if (null !== $this->edassAppId) {
            $res['EdassAppId'] = $this->edassAppId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EdasAppName'])) {
            $model->edasAppName = $map['EdasAppName'];
        }
        if (isset($map['EdassAppId'])) {
            $model->edassAppId = $map['EdassAppId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        return $model;
    }
}
