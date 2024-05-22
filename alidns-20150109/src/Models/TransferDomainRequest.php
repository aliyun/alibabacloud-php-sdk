<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class TransferDomainRequest extends Model
{
    /**
     * @description The domain names. Separate multiple domain names with commas (,). Only domain names registered with Alibaba Cloud are supported.
     *
     * This parameter is required.
     * @example test1.com,test2.com
     *
     * @var string
     */
    public $domainNames;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The description of the domain name.
     *
     * @example test domain transfer
     *
     * @var string
     */
    public $remark;

    /**
     * @description The destination user ID. The domain names and their Domain Name System (DNS) records are transferred to the destination user ID.
     *
     * This parameter is required.
     * @example 12345678
     *
     * @var int
     */
    public $targetUserId;
    protected $_name = [
        'domainNames'  => 'DomainNames',
        'lang'         => 'Lang',
        'remark'       => 'Remark',
        'targetUserId' => 'TargetUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainNames) {
            $res['DomainNames'] = $this->domainNames;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->targetUserId) {
            $res['TargetUserId'] = $this->targetUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TransferDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainNames'])) {
            $model->domainNames = $map['DomainNames'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['TargetUserId'])) {
            $model->targetUserId = $map['TargetUserId'];
        }

        return $model;
    }
}
