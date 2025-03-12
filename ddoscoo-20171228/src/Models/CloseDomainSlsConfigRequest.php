<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class CloseDomainSlsConfigRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example cn
     *
     * @var string
     */
    public $lang;

    /**
     * @example xx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 1.1.1.1
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'domain'          => 'Domain',
        'lang'            => 'Lang',
        'resourceGroupId' => 'ResourceGroupId',
        'sourceIp'        => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloseDomainSlsConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
