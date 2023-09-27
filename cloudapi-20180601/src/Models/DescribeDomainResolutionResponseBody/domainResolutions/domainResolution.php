<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeDomainResolutionResponseBody\domainResolutions;

use AlibabaCloud\Tea\Model;

class domainResolution extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainNameResolution;
    protected $_name = [
        'domainName'           => 'DomainName',
        'domainNameResolution' => 'DomainNameResolution',
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
        if (null !== $this->domainNameResolution) {
            $res['DomainNameResolution'] = $this->domainNameResolution;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainNameResolution'])) {
            $model->domainNameResolution = $map['DomainNameResolution'];
        }

        return $model;
    }
}
