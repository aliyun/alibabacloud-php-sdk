<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\DescribeRegionsResponseBody;

use AlibabaCloud\Tea\Model;

class regions extends Model
{
    /**
     * @var string
     */
    public $internetEndpoint;

    /**
     * @var string
     */
    public $intranetEndpoint;

    /**
     * @var string
     */
    public $localName;

    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'internetEndpoint' => 'internetEndpoint',
        'intranetEndpoint' => 'intranetEndpoint',
        'localName'        => 'localName',
        'region'           => 'region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->internetEndpoint) {
            $res['internetEndpoint'] = $this->internetEndpoint;
        }
        if (null !== $this->intranetEndpoint) {
            $res['intranetEndpoint'] = $this->intranetEndpoint;
        }
        if (null !== $this->localName) {
            $res['localName'] = $this->localName;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['internetEndpoint'])) {
            $model->internetEndpoint = $map['internetEndpoint'];
        }
        if (isset($map['intranetEndpoint'])) {
            $model->intranetEndpoint = $map['intranetEndpoint'];
        }
        if (isset($map['localName'])) {
            $model->localName = $map['localName'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        return $model;
    }
}
