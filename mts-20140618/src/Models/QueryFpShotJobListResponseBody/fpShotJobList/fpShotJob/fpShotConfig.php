<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob;

use AlibabaCloud\Dara\Model;

class fpShotConfig extends Model
{
    /**
     * @var string
     */
    public $fpDBId;

    /**
     * @var string
     */
    public $primaryKey;

    /**
     * @var string
     */
    public $saveType;
    protected $_name = [
        'fpDBId' => 'FpDBId',
        'primaryKey' => 'PrimaryKey',
        'saveType' => 'SaveType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fpDBId) {
            $res['FpDBId'] = $this->fpDBId;
        }

        if (null !== $this->primaryKey) {
            $res['PrimaryKey'] = $this->primaryKey;
        }

        if (null !== $this->saveType) {
            $res['SaveType'] = $this->saveType;
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
        if (isset($map['FpDBId'])) {
            $model->fpDBId = $map['FpDBId'];
        }

        if (isset($map['PrimaryKey'])) {
            $model->primaryKey = $map['PrimaryKey'];
        }

        if (isset($map['SaveType'])) {
            $model->saveType = $map['SaveType'];
        }

        return $model;
    }
}
