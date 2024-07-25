<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GatewayRouteDomainInfo;

use AlibabaCloud\Tea\Model;

class domains extends Model
{
    /**
     * @example d-cp82or5l***
     *
     * @var string
     */
    public $domainId;

    /**
     * @example item.dev
     *
     * @var string
     */
    public $name;

    /**
     * @example HTTP
     *
     * @var string
     */
    public $protocol;
    protected $_name = [
        'domainId' => 'domainId',
        'name'     => 'name',
        'protocol' => 'protocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainId) {
            $res['domainId'] = $this->domainId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domains
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['domainId'])) {
            $model->domainId = $map['domainId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        return $model;
    }
}
