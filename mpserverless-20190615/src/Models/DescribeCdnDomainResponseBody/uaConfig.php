<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeCdnDomainResponseBody;

use AlibabaCloud\Tea\Model;

class uaConfig extends Model
{
    /**
     * @example 25950108534****
     *
     * @var string
     */
    public $configId;

    /**
     * @example white
     *
     * @var string
     */
    public $type;

    /**
     * @example *curl*|*IE*|*chrome*|*firefox*
     *
     * @var string
     */
    public $uaList;
    protected $_name = [
        'configId' => 'ConfigId',
        'type'     => 'Type',
        'uaList'   => 'UaList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uaList) {
            $res['UaList'] = $this->uaList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return uaConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UaList'])) {
            $model->uaList = $map['UaList'];
        }

        return $model;
    }
}
