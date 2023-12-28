<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\Tea\Model;

class GetFlowControlRequest extends Model
{
    /**
     * @var string
     */
    public $api;

    /**
     * @var string
     */
    public $service;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'api'     => 'Api',
        'service' => 'Service',
        'type'    => 'Type',
        'uid'     => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->api) {
            $res['Api'] = $this->api;
        }
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFlowControlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Api'])) {
            $model->api = $map['Api'];
        }
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
