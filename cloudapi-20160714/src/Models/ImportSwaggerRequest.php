<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;

class ImportSwaggerRequest extends Model
{
    /**
     * @var string
     */
    public $data;
    /**
     * @var string
     */
    public $dataFormat;
    /**
     * @var bool
     */
    public $dryRun;
    /**
     * @var mixed[]
     */
    public $globalCondition;
    /**
     * @var string
     */
    public $groupId;
    /**
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
        if (\is_array($this->globalCondition)) {
            Model::validateArray($this->globalCondition);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->globalCondition)) {
                $res['GlobalCondition'] = [];
                foreach ($this->globalCondition as $key1 => $value1) {
                    $res['GlobalCondition'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['GlobalCondition'])) {
                $model->globalCondition = [];
                foreach ($map['GlobalCondition'] as $key1 => $value1) {
                    $model->globalCondition[$key1] = $value1;
                }
            }
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
