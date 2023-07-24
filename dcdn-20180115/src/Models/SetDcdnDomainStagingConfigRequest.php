<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class SetDcdnDomainStagingConfigRequest extends Model
{
    /**
     * @description The accelerated domain name. Separate multiple accelerated domain names with commas (,).
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The list of features. Format: `[{"functionArgs":[{"argName":"parameter key","argValue":"parameter value"},{"argName":"xx","argValue":"xx"}],"functionName": feature name"}]`
     *
     * > Separate multiple parameters with commas (,).
     * @example [{\"functionArgs\":[{\"argName\":\"enable\",\"argValue\":\"on\",\"argName\":\"pri\",\"argValue\":\"1\",\"argName\":\"rule\",\"argValue\":\"xxx\"}],\"functionName\":\"edge_function\"}]
     *
     * @var string
     */
    public $functions;
    protected $_name = [
        'domainName' => 'DomainName',
        'functions'  => 'Functions',
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
        if (null !== $this->functions) {
            $res['Functions'] = $this->functions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDcdnDomainStagingConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Functions'])) {
            $model->functions = $map['Functions'];
        }

        return $model;
    }
}
