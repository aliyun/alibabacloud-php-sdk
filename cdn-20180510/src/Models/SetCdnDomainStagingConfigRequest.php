<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class SetCdnDomainStagingConfigRequest extends Model
{
    /**
     * @description The accelerated domain name. You can specify only one domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The features that you want to configure. Format:
     *
     * > *   **functionName**: The name of the feature. Separate multiple values with commas (,). For more information, see [A list of features](~~388460~~).
     * >*   **argName**: The feature parameters for **functionName**.
     * >*   **argValue**: The parameter values set for **functionName**.
     *
     * ]
     * @example [{"functionArgs":[{"argName":"enable","argValue":"on"},{"argName":"pri","argValue":"1"},{"argName":"rule","argValue":"xxx"}],"functionName":"edge_function"}]
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
     * @return SetCdnDomainStagingConfigRequest
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
