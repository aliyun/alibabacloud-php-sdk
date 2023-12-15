<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\QueryTrajectoryByIdRequest;

use AlibabaCloud\Tea\Model;

class idList extends Model
{
    /**
     * @var string
     */
    public $idType;

    /**
     * @var string
     */
    public $idValue;
    protected $_name = [
        'idType'  => 'IdType',
        'idValue' => 'IdValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->idType) {
            $res['IdType'] = $this->idType;
        }
        if (null !== $this->idValue) {
            $res['IdValue'] = $this->idValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return idList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdType'])) {
            $model->idType = $map['IdType'];
        }
        if (isset($map['IdValue'])) {
            $model->idValue = $map['IdValue'];
        }

        return $model;
    }
}
