<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpRoute\environmentInfo;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
