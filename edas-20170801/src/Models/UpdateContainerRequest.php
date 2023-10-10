<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateContainerRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example e83acea6-****-47e1-96ae-c0e953772cdc
     *
     * @var string
     */
    public $appId;

    /**
     * @description The build package number of EDAS Container. You can obtain the build package number in the Build package number column in the EDAS Container release notes table. For more information, see [Release notes for EDAS Container](~~92614~~).
     *
     * @example 59
     *
     * @var int
     */
    public $buildPackId;
    protected $_name = [
        'appId'       => 'AppId',
        'buildPackId' => 'BuildPackId',
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
        if (null !== $this->buildPackId) {
            $res['BuildPackId'] = $this->buildPackId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateContainerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BuildPackId'])) {
            $model->buildPackId = $map['BuildPackId'];
        }

        return $model;
    }
}
