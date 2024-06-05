<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsdg\V20230914\Models;

use AlibabaCloud\Tea\Model;

class DownloadGatewayProgramRequest extends Model
{
    /**
     * @example 3.0
     *
     * @var string
     */
    public $dgVersion;

    /**
     * @example LINUX
     *
     * @var string
     */
    public $userOS;
    protected $_name = [
        'dgVersion' => 'DgVersion',
        'userOS'    => 'UserOS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dgVersion) {
            $res['DgVersion'] = $this->dgVersion;
        }
        if (null !== $this->userOS) {
            $res['UserOS'] = $this->userOS;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DownloadGatewayProgramRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DgVersion'])) {
            $model->dgVersion = $map['DgVersion'];
        }
        if (isset($map['UserOS'])) {
            $model->userOS = $map['UserOS'];
        }

        return $model;
    }
}
