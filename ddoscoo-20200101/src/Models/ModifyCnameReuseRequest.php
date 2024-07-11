<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyCnameReuseRequest extends Model
{
    /**
     * @description The CNAME record that you want to reuse for the website.
     *
     * @example 4o6ep6q217k9****.aliyunddos0004.com
     *
     * @var string
     */
    public $cname;

    /**
     * @description The domain name of the website.
     *
     * This parameter is required.
     * @example www.aliyun.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description Specifies whether to enable CNAME reuse. Valid values:
     *
     *   **0:** disabled
     *   **1:** enabled
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $enable;

    /**
     * @description The ID of the resource group to which the instance belongs in Resource Management. This parameter is empty by default, which indicates that the instance belongs to the default resource group.
     *
     * @example default
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'cname'           => 'Cname',
        'domain'          => 'Domain',
        'enable'          => 'Enable',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCnameReuseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
