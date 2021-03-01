<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ScaleOutApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $ecuInfo;

    /**
     * @var string
     */
    public $deployGroup;
    protected $_name = [
        'appId'       => 'AppId',
        'ecuInfo'     => 'EcuInfo',
        'deployGroup' => 'DeployGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->ecuInfo) {
            $res['EcuInfo'] = $this->ecuInfo;
        }
        if (null !== $this->deployGroup) {
            $res['DeployGroup'] = $this->deployGroup;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScaleOutApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EcuInfo'])) {
            $model->ecuInfo = $map['EcuInfo'];
        }
        if (isset($map['DeployGroup'])) {
            $model->deployGroup = $map['DeployGroup'];
        }

        return $model;
    }
}
