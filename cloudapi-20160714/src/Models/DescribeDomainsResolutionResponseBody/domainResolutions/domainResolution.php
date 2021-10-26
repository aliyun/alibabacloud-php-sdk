<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDomainsResolutionResponseBody\domainResolutions;

use AlibabaCloud\Tea\Model;

class domainResolution extends Model
{
    /**
     * @var string
     */
    public $domainResolutionStatus;

    /**
     * @var string
     */
    public $domainName;
    protected $_name = [
        'domainResolutionStatus' => 'DomainResolutionStatus',
        'domainName'             => 'DomainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainResolutionStatus) {
            $res['DomainResolutionStatus'] = $this->domainResolutionStatus;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainResolution
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainResolutionStatus'])) {
            $model->domainResolutionStatus = $map['DomainResolutionStatus'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}
