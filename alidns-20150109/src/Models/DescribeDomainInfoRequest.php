<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainInfoRequest extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var bool
     */
    public $needDetailAttributes;
    protected $_name = [
        'domainName'           => 'DomainName',
        'lang'                 => 'Lang',
        'needDetailAttributes' => 'NeedDetailAttributes',
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
        if (null !== $this->needDetailAttributes) {
            $res['NeedDetailAttributes'] = $this->needDetailAttributes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainInfoRequest
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
        if (isset($map['NeedDetailAttributes'])) {
            $model->needDetailAttributes = $map['NeedDetailAttributes'];
        }

        return $model;
    }
}
