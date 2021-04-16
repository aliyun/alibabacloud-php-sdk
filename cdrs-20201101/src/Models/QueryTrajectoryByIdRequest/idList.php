<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\QueryTrajectoryByIdRequest;

use AlibabaCloud\Tea\Model;

class idList extends Model
{
    /**
     * @var string
     */
    public $idValue;

    /**
     * @var string
     */
    public $idType;
    protected $_name = [
        'idValue' => 'IdValue',
        'idType'  => 'IdType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->idValue) {
            $res['IdValue'] = $this->idValue;
        }
        if (null !== $this->idType) {
            $res['IdType'] = $this->idType;
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
        if (isset($map['IdValue'])) {
            $model->idValue = $map['IdValue'];
        }
        if (isset($map['IdType'])) {
            $model->idType = $map['IdType'];
        }

        return $model;
    }
}
