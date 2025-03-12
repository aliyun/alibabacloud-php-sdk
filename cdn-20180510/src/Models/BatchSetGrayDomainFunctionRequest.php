<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class BatchSetGrayDomainFunctionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example [{"functionArgs": [{"argName": "key","argValue": "Content-Encoding"},{"argName": "value","argValue": "gzip"}],"functionName": "set_resp_header"} ]
     *
     * @var string
     */
    public $configs;

    /**
     * @description This parameter is required.
     *
     * @example example.com,xxx.org.com
     *
     * @var string
     */
    public $domainNames;
    protected $_name = [
        'configs'     => 'Configs',
        'domainNames' => 'DomainNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configs) {
            $res['Configs'] = $this->configs;
        }
        if (null !== $this->domainNames) {
            $res['DomainNames'] = $this->domainNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchSetGrayDomainFunctionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Configs'])) {
            $model->configs = $map['Configs'];
        }
        if (isset($map['DomainNames'])) {
            $model->domainNames = $map['DomainNames'];
        }

        return $model;
    }
}
