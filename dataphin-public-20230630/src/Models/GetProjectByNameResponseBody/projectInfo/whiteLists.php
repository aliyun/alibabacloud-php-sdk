<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetProjectByNameResponseBody\projectInfo;

use AlibabaCloud\Tea\Model;

class whiteLists extends Model
{
    /**
     * @example xx 白名单
     *
     * @var string
     */
    public $description;

    /**
     * @description Ip
     *
     * @example 10.11.1.21
     *
     * @var string
     */
    public $ip;

    /**
     * @example 5432
     *
     * @var string
     */
    public $port;
    protected $_name = [
        'description' => 'Description',
        'ip' => 'Ip',
        'port' => 'Port',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return whiteLists
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
