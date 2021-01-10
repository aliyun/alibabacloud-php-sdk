<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob;

use AlibabaCloud\Tea\Model;

class fpShotConfig extends Model
{
    /**
     * @var string
     */
    public $primaryKey;

    /**
     * @var string
     */
    public $saveType;

    /**
     * @var string
     */
    public $notary;

    /**
     * @var string
     */
    public $fpDBId;
    protected $_name = [
        'primaryKey' => 'PrimaryKey',
        'saveType'   => 'SaveType',
        'notary'     => 'Notary',
        'fpDBId'     => 'FpDBId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->primaryKey) {
            $res['PrimaryKey'] = $this->primaryKey;
        }
        if (null !== $this->saveType) {
            $res['SaveType'] = $this->saveType;
        }
        if (null !== $this->notary) {
            $res['Notary'] = $this->notary;
        }
        if (null !== $this->fpDBId) {
            $res['FpDBId'] = $this->fpDBId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fpShotConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrimaryKey'])) {
            $model->primaryKey = $map['PrimaryKey'];
        }
        if (isset($map['SaveType'])) {
            $model->saveType = $map['SaveType'];
        }
        if (isset($map['Notary'])) {
            $model->notary = $map['Notary'];
        }
        if (isset($map['FpDBId'])) {
            $model->fpDBId = $map['FpDBId'];
        }

        return $model;
    }
}
