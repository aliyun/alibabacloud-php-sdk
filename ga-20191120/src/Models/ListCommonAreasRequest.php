<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;

class ListCommonAreasRequest extends Model
{
    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @var bool
     */
    public $isEpg;

    /**
     * @var bool
     */
    public $isIpSet;
    protected $_name = [
        'ipVersion' => 'IpVersion',
        'isEpg' => 'IsEpg',
        'isIpSet' => 'IsIpSet',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }

        if (null !== $this->isEpg) {
            $res['IsEpg'] = $this->isEpg;
        }

        if (null !== $this->isIpSet) {
            $res['IsIpSet'] = $this->isIpSet;
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
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }

        if (isset($map['IsEpg'])) {
            $model->isEpg = $map['IsEpg'];
        }

        if (isset($map['IsIpSet'])) {
            $model->isIpSet = $map['IsIpSet'];
        }

        return $model;
    }
}
