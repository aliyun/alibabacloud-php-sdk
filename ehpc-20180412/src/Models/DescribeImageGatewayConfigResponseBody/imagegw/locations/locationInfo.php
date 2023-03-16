<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeImageGatewayConfigResponseBody\imagegw\locations;

use AlibabaCloud\Tea\Model;

class locationInfo extends Model
{
    /**
     * @description The authentication method of the image repository. Valid values:
     *
     *   http
     *   https
     *
     * @example https
     *
     * @var string
     */
    public $authentication;

    /**
     * @description The source address of the image repository.
     *
     * @example regi****.docker.io
     *
     * @var string
     */
    public $location;

    /**
     * @description The type of the image repository.
     *
     * @example dockerv2
     *
     * @var string
     */
    public $remoteType;

    /**
     * @description The URL of the image repository.
     *
     * @example https://regi****.docker-cn.com
     *
     * @var string
     */
    public $URL;
    protected $_name = [
        'authentication' => 'Authentication',
        'location'       => 'Location',
        'remoteType'     => 'RemoteType',
        'URL'            => 'URL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authentication) {
            $res['Authentication'] = $this->authentication;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->remoteType) {
            $res['RemoteType'] = $this->remoteType;
        }
        if (null !== $this->URL) {
            $res['URL'] = $this->URL;
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
        if (isset($map['Authentication'])) {
            $model->authentication = $map['Authentication'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['RemoteType'])) {
            $model->remoteType = $map['RemoteType'];
        }
        if (isset($map['URL'])) {
            $model->URL = $map['URL'];
        }

        return $model;
    }
}
