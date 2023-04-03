<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class TransferDomainRequest extends Model
{
    /**
     * @description The list of domain names. Separate multiple domain names with commas (,). Only domain names registered with Alibaba Cloud are supported.
     *
     * @example test1.com,test2.com
     *
     * @var string
     */
    public $domainNames;

    /**
     * @description The language type.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The detailed information.
     *
     * @example test domain transfer
     *
     * @var string
     */
    public $remark;

    /**
     * @description The ID of the user to which domain names were transferred.
     *
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
