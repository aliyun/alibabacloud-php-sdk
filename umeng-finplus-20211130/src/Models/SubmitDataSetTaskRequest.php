<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20211130\Models;

use AlibabaCloud\Tea\Model;

class SubmitDataSetTaskRequest extends Model
{
    /**
     * @var int
     */
    public $dataSetType;

    /**
     * @var int
     */
    public $idType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ossFileName;
    protected $_name = [
        'dataSetType' => 'dataSetType',
        'idType'      => 'idType',
        'name'        => 'name',
        'ossFileName' => 'ossFileName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSetType) {
            $res['dataSetType'] = $this->dataSetType;
        }
        if (null !== $this->idType) {
            $res['idType'] = $this->idType;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->ossFileName) {
            $res['ossFileName'] = $this->ossFileName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitDataSetTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataSetType'])) {
            $model->dataSetType = $map['dataSetType'];
        }
        if (isset($map['idType'])) {
            $model->idType = $map['idType'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['ossFileName'])) {
            $model->ossFileName = $map['ossFileName'];
        }

        return $model;
    }
}
