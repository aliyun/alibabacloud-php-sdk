<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20160801\Models\ConfigurationSynchronizationJobRequest;

use AlibabaCloud\Tea\Model;

class initialization extends Model
{
    /**
     * @var bool
     */
    public $dataLoad;

    /**
     * @var bool
     */
    public $structureLoad;
    protected $_name = [
        'dataLoad'      => 'DataLoad',
        'structureLoad' => 'StructureLoad',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataLoad) {
            $res['DataLoad'] = $this->dataLoad;
        }
        if (null !== $this->structureLoad) {
            $res['StructureLoad'] = $this->structureLoad;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return initialization
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataLoad'])) {
            $model->dataLoad = $map['DataLoad'];
        }
        if (isset($map['StructureLoad'])) {
            $model->structureLoad = $map['StructureLoad'];
        }

        return $model;
    }
}
