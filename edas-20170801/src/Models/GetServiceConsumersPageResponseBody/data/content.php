<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceConsumersPageResponseBody\data;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $edasAppName;

    /**
     * @var string
     */
    public $edassAppId;

    /**
     * @var string
     */
    public $ip;
    protected $_name = [
        'edasAppName' => 'EdasAppName',
        'edassAppId' => 'EdassAppId',
        'ip' => 'Ip',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
