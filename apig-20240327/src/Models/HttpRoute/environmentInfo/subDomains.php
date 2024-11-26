<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpRoute\environmentInfo;

use AlibabaCloud\Tea\Model;

class subDomains extends Model
{
    /**
     * @var string
     */
    public $domainId;

    /**
     * @var string
     */
    public $name;

    /**
     * @example Internet
     *
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $protocol;
    protected $_name = [
        'domainId'    => 'domainId',
        'name'        => 'name',
        'networkType' => 'networkType',
        'protocol'    => 'protocol',
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
        if (null !== $this->networkType) {
            $res['networkType'] = $this->networkType;
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subDomains
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
        if (isset($map['networkType'])) {
            $model->networkType = $map['networkType'];
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        return $model;
    }
}
