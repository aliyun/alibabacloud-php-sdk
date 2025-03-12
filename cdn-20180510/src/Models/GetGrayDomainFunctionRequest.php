<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class GetGrayDomainFunctionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example domain_status,https_option
     *
     * @var string
     */
    public $functionNames;
    protected $_name = [
        'domainName'    => 'DomainName',
        'functionNames' => 'FunctionNames',
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
        if (null !== $this->functionNames) {
            $res['FunctionNames'] = $this->functionNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetGrayDomainFunctionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['FunctionNames'])) {
            $model->functionNames = $map['FunctionNames'];
        }

        return $model;
    }
}
