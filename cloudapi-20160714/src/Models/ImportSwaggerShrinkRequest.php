<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ImportSwaggerShrinkRequest extends Model
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
     * @var string
     */
    public $globalConditionShrink;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var bool
     */
    public $overwrite;
    protected $_name = [
        'data'                  => 'Data',
        'dataFormat'            => 'DataFormat',
        'dryRun'                => 'DryRun',
        'globalConditionShrink' => 'GlobalCondition',
        'groupId'               => 'GroupId',
        'overwrite'             => 'Overwrite',
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
        if (null !== $this->globalConditionShrink) {
            $res['GlobalCondition'] = $this->globalConditionShrink;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportSwaggerShrinkRequest
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
            $model->globalConditionShrink = $map['GlobalCondition'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Overwrite'])) {
            $model->overwrite = $map['Overwrite'];
        }

        return $model;
    }
}
