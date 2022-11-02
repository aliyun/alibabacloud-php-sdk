<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainsResponseBody\domains;

use AlibabaCloud\Tea\Model;

class listenPorts extends Model
{
    /**
     * @var int[]
     */
    public $http;

    /**
     * @var int[]
     */
    public $https;
    protected $_name = [
        'http'  => 'Http',
        'https' => 'Https',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->http) {
            $res['Http'] = $this->http;
        }
        if (null !== $this->https) {
            $res['Https'] = $this->https;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listenPorts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Http'])) {
            if (!empty($map['Http'])) {
                $model->http = $map['Http'];
            }
        }
        if (isset($map['Https'])) {
            if (!empty($map['Https'])) {
                $model->https = $map['Https'];
            }
        }

        return $model;
    }
}
