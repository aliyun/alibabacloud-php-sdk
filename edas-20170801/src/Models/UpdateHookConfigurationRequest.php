<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateHookConfigurationRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example d498****-1dd8ec229862
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the application instance group.
     *
     * @example d498****-1dd8ec229862
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The script to mount. Set the value in the JSON format. Example: `[{"ignoreFail":false,"name":"postprepareInstanceEnvironmentOnScaleOut","script":"ls"},{"ignoreFail":true,"name":"postdeleteInstanceDataOnScaleIn","script":""},{"ignoreFail":true,"name":"prestartInstance","script":""},{"ignoreFail":true,"name":"poststartInstance","script":""},{"ignoreFail":true,"name":"prestopInstance","script":""},{"ignoreFail":true,"name":"poststopInstance","script":""}]`
     *
     * @example [{"ignoreFail":false,"name":"postprepareInstanceEnvironmentOnScaleOut","script":"ls"}]
     *
     * @var string
     */
    public $hooks;
    protected $_name = [
        'appId'   => 'AppId',
        'groupId' => 'GroupId',
        'hooks'   => 'Hooks',
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
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->hooks) {
            $res['Hooks'] = $this->hooks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHookConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Hooks'])) {
            $model->hooks = $map['Hooks'];
        }

        return $model;
    }
}
