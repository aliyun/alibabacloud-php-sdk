<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyImageGatewayConfigRequest;

use AlibabaCloud\Tea\Model;

class repo extends Model
{
    /**
     * @var string
     */
    public $auth;

    /**
     * @var string
     */
    public $URL;

    /**
     * @var string
     */
    public $location;
    protected $_name = [
        'auth'     => 'Auth',
        'URL'      => 'URL',
        'location' => 'Location',
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
        if (null !== $this->URL) {
            $res['URL'] = $this->URL;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
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
        if (isset($map['URL'])) {
            $model->URL = $map['URL'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        return $model;
    }
}
