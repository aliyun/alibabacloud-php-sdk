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
    public $deployGroup;

    /**
     * @var string
     */
    public $ecuInfo;
    protected $_name = [
        'appId'       => 'AppId',
        'deployGroup' => 'DeployGroup',
        'ecuInfo'     => 'EcuInfo',
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
        if (null !== $this->deployGroup) {
            $res['DeployGroup'] = $this->deployGroup;
        }
        if (null !== $this->ecuInfo) {
            $res['EcuInfo'] = $this->ecuInfo;
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
        if (isset($map['DeployGroup'])) {
            $model->deployGroup = $map['DeployGroup'];
        }
        if (isset($map['EcuInfo'])) {
            $model->ecuInfo = $map['EcuInfo'];
        }

        return $model;
    }
}
