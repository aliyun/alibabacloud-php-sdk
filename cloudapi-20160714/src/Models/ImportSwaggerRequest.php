<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ImportSwaggerRequest extends Model
{
    /**
     * @example "A Swagger API definition in YAML"
     *
     * @var string
     */
    public $data;

    /**
     * @description 382271
     *
     * @example yaml
     *
     * @var string
     */
    public $dataFormat;

    /**
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description Creates an API by importing Swagger-compliant data.
     *
     * @example {}
     *
     * @var mixed[]
     */
    public $globalCondition;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @description 8e274ec61cf6468e83b68371956831cb
     *
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
        'dryRun'          => 'DryRun',
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
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
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
     * @return ImportSwaggerRequest
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
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
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
