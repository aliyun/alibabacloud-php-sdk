<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceConsumersPageResponseBody\data;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $edasAppName;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $edassAppId;
    protected $_name = [
        'edasAppName' => 'EdasAppName',
        'ip'          => 'Ip',
        'edassAppId'  => 'EdassAppId',
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
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->edassAppId) {
            $res['EdassAppId'] = $this->edassAppId;
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
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['EdassAppId'])) {
            $model->edassAppId = $map['EdassAppId'];
        }

        return $model;
    }
}
