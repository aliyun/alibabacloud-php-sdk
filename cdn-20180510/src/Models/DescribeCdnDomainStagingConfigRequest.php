<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeCdnDomainStagingConfigRequest extends Model
{
    /**
     * @description The accelerated domain name. You can specify only one domain name in each call.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The list of feature names. Separate multiple values with commas (,). For more information, see [A list of features](~~388460~~).
     *
     * @example aliauth
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
     * @return DescribeCdnDomainStagingConfigRequest
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
