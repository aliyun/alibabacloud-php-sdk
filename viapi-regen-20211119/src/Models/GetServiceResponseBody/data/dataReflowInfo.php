<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetServiceResponseBody\data;

use AlibabaCloud\Tea\Model;

class dataReflowInfo extends Model
{
    /**
     * @var int
     */
    public $dataReflowCount;

    /**
     * @var string
     */
    public $dataReflowOssPath;

    /**
     * @var int
     */
    public $dataReflowRate;

    /**
     * @var bool
     */
    public $enableDataReflowFlag;
    protected $_name = [
        'dataReflowCount'      => 'DataReflowCount',
        'dataReflowOssPath'    => 'DataReflowOssPath',
        'dataReflowRate'       => 'DataReflowRate',
        'enableDataReflowFlag' => 'EnableDataReflowFlag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataReflowCount) {
            $res['DataReflowCount'] = $this->dataReflowCount;
        }
        if (null !== $this->dataReflowOssPath) {
            $res['DataReflowOssPath'] = $this->dataReflowOssPath;
        }
        if (null !== $this->dataReflowRate) {
            $res['DataReflowRate'] = $this->dataReflowRate;
        }
        if (null !== $this->enableDataReflowFlag) {
            $res['EnableDataReflowFlag'] = $this->enableDataReflowFlag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataReflowInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataReflowCount'])) {
            $model->dataReflowCount = $map['DataReflowCount'];
        }
        if (isset($map['DataReflowOssPath'])) {
            $model->dataReflowOssPath = $map['DataReflowOssPath'];
        }
        if (isset($map['DataReflowRate'])) {
            $model->dataReflowRate = $map['DataReflowRate'];
        }
        if (isset($map['EnableDataReflowFlag'])) {
            $model->enableDataReflowFlag = $map['EnableDataReflowFlag'];
        }

        return $model;
    }
}
