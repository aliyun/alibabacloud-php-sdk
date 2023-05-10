<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackGroupRequest;

use AlibabaCloud\Tea\Model;

class parameters extends Model
{
    /**
     * @description The folders in which you want to use service-managed permissions to update stacks.
     *
     * @example Amount
     *
     * @var string
     */
    public $parameterKey;

    /**
     * @description The folder IDs in the resource directory. You can specify a maximum of five folder IDs.
     *
     * You must set at least one of the RdFolderIds and AccountIds parameters. The parameters are subject to the following items:
     *
     *   If you set only the RdFolderIds parameter, stacks are deployed within all the members in the specified folders. If you specify the Root folder, ROS deploys the stacks within all the members in the resource directory.
     *   If you set only the AccountIds parameter, stacks are deployed within the specified members.
     *   If you set both parameters, the accounts specified by AccountIds must be contained in the folders specified by RdFolderIds.
     *
     * >  To view the folder IDs, go to the **Overview** page in the **Resource Management** console. For more information, see [View the basic information of a folder](~~111223~~).
     * @example 1
     *
     * @var string
     */
    public $parameterValue;
    protected $_name = [
        'parameterKey'   => 'ParameterKey',
        'parameterValue' => 'ParameterValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterKey) {
            $res['ParameterKey'] = $this->parameterKey;
        }
        if (null !== $this->parameterValue) {
            $res['ParameterValue'] = $this->parameterValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParameterKey'])) {
            $model->parameterKey = $map['ParameterKey'];
        }
        if (isset($map['ParameterValue'])) {
            $model->parameterValue = $map['ParameterValue'];
        }

        return $model;
    }
}
