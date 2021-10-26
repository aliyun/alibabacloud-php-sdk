<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ImportSwaggerRequest extends Model
{
    /**
     * @var bool
     */
    public $overwrite;

    /**
     * @var mixed[]
     */
    public $globalCondition;

    /**
     * @var string
     */
    public $dataFormat;

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'overwrite'       => 'Overwrite',
        'globalCondition' => 'GlobalCondition',
        'dataFormat'      => 'DataFormat',
        'data'            => 'Data',
        'groupId'         => 'GroupId',
        'dryRun'          => 'DryRun',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
        }
        if (null !== $this->globalCondition) {
            $res['GlobalCondition'] = $this->globalCondition;
        }
        if (null !== $this->dataFormat) {
            $res['DataFormat'] = $this->dataFormat;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
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
        if (isset($map['Overwrite'])) {
            $model->overwrite = $map['Overwrite'];
        }
        if (isset($map['GlobalCondition'])) {
            $model->globalCondition = $map['GlobalCondition'];
        }
        if (isset($map['DataFormat'])) {
            $model->dataFormat = $map['DataFormat'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        return $model;
    }
}
