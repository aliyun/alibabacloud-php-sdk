<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetOptionValueForProjectRequest extends Model
{
    /**
     * @description The ID of the workspace.
     *
     * @example ce4*********086da5
     *
     * @var string
     */
    public $extensionCode;

    /**
     * @description Id of the request
     *
     * @example 234
     *
     * @var string
     */
    public $projectId;
    protected $_name = [
        'extensionCode' => 'ExtensionCode',
        'projectId'     => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extensionCode) {
            $res['ExtensionCode'] = $this->extensionCode;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOptionValueForProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtensionCode'])) {
            $model->extensionCode = $map['ExtensionCode'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
