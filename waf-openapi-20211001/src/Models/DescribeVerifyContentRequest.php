<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class DescribeVerifyContentRequest extends Model
{
    /**
     * @var string
     */
    public $accessOrigin;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'accessOrigin' => 'AccessOrigin',
        'domainName' => 'DomainName',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessOrigin) {
            $res['AccessOrigin'] = $this->accessOrigin;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['AccessOrigin'])) {
            $model->accessOrigin = $map['AccessOrigin'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
