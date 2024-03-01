<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateDomainRemarkRequest extends Model
{
    /**
     * @description The domain name that already exists in Alibaba Cloud DNS.
     *
     * @example mydomain.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The language.
     *
     * @example cn
     *
     * @var string
     */
    public $lang;

    /**
     * @description The description of your domain name.
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'domainName' => 'DomainName',
        'lang'       => 'Lang',
        'remark'     => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDomainRemarkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
