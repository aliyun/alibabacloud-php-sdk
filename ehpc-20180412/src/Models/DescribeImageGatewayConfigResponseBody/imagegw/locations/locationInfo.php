<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeImageGatewayConfigResponseBody\imagegw\locations;

use AlibabaCloud\Tea\Model;

class locationInfo extends Model
{
    /**
     * @var string
     */
    public $URL;

    /**
     * @var string
     */
    public $remoteType;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $authentication;
    protected $_name = [
        'URL'            => 'URL',
        'remoteType'     => 'RemoteType',
        'location'       => 'Location',
        'authentication' => 'Authentication',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->URL) {
            $res['URL'] = $this->URL;
        }
        if (null !== $this->remoteType) {
            $res['RemoteType'] = $this->remoteType;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->authentication) {
            $res['Authentication'] = $this->authentication;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return locationInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['URL'])) {
            $model->URL = $map['URL'];
        }
        if (isset($map['RemoteType'])) {
            $model->remoteType = $map['RemoteType'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Authentication'])) {
            $model->authentication = $map['Authentication'];
        }

        return $model;
    }
}
