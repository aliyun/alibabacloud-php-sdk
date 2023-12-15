<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeCloudIntegrationServiceTokenResponseBody\result;

use AlibabaCloud\Tea\Model;

class history extends Model
{
    /**
     * @var string
     */
    public $service;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'service' => 'Service',
        'token'   => 'Token',
        'type'    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return history
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
