<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DryRunSwaggerRequest extends Model
{
    /**
     * @description The Swagger text content.
     *
     * @example "A Swagger API definition in YAML"
     *
     * @var string
     */
    public $data;

    /**
     * @description The Swagger text format:
     *
     *   json
     *   yaml
     *
     * @example yaml
     *
     * @var string
     */
    public $dataFormat;

    /**
     * @description The global condition.
     *
     * @example {}
     *
     * @var mixed[]
     */
    public $globalCondition;

    /**
     * @description The ID of the API group.
     *
     * @example d633cf5524f841b9950e245b191bdabf
     *
     * @var string
     */
    public $groupId;

    /**
     * @description Specifies whether to overwrite the existing API.
     *
     * APIs with the same HTTP request type and backend request path are considered the same.
     * @example true
     *
     * @var bool
     */
    public $overwrite;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'data'            => 'Data',
        'dataFormat'      => 'DataFormat',
        'globalCondition' => 'GlobalCondition',
        'groupId'         => 'GroupId',
        'overwrite'       => 'Overwrite',
        'securityToken'   => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->dataFormat) {
            $res['DataFormat'] = $this->dataFormat;
        }
        if (null !== $this->globalCondition) {
            $res['GlobalCondition'] = $this->globalCondition;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DryRunSwaggerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['DataFormat'])) {
            $model->dataFormat = $map['DataFormat'];
        }
        if (isset($map['GlobalCondition'])) {
            $model->globalCondition = $map['GlobalCondition'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Overwrite'])) {
            $model->overwrite = $map['Overwrite'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
