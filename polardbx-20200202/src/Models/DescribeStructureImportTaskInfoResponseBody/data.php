<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeStructureImportTaskInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeStructureImportTaskInfoResponseBody\data\structureImportResult;

class data extends Model
{
    /**
     * @var string
     */
    public $slinkStage;

    /**
     * @var structureImportResult
     */
    public $structureImportResult;
    protected $_name = [
        'slinkStage' => 'SlinkStage',
        'structureImportResult' => 'StructureImportResult',
    ];

    public function validate()
    {
        if (null !== $this->structureImportResult) {
            $this->structureImportResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->slinkStage) {
            $res['SlinkStage'] = $this->slinkStage;
        }

        if (null !== $this->structureImportResult) {
            $res['StructureImportResult'] = null !== $this->structureImportResult ? $this->structureImportResult->toArray($noStream) : $this->structureImportResult;
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
        if (isset($map['SlinkStage'])) {
            $model->slinkStage = $map['SlinkStage'];
        }

        if (isset($map['StructureImportResult'])) {
            $model->structureImportResult = structureImportResult::fromMap($map['StructureImportResult']);
        }

        return $model;
    }
}
