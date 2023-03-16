<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyImageGatewayConfigRequest;

use AlibabaCloud\Tea\Model;

class repo extends Model
{
    /**
     * @description The authentication method of the repository. Valid values:
     *
     *   http
     *   https
     *
     * Default value: http.
     * @example http
     *
     * @var string
     */
    public $auth;

    /**
     * @description The address of the repository N.
     *
     * @example registry.docker-cn.com
     *
     * @var string
     */
    public $location;

    /**
     * @description The URL of the repository. The URL is required to add a repository address.
     *
     * @example https://registry.docker-cn.com
     *
     * @var string
     */
    public $URL;
    protected $_name = [
        'auth'     => 'Auth',
        'location' => 'Location',
        'URL'      => 'URL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auth) {
            $res['Auth'] = $this->auth;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->URL) {
            $res['URL'] = $this->URL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return repo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Auth'])) {
            $model->auth = $map['Auth'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['URL'])) {
            $model->URL = $map['URL'];
        }

        return $model;
    }
}
