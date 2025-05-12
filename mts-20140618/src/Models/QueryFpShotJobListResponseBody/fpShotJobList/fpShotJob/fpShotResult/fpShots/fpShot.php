<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob\fpShotResult\fpShots;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob\fpShotResult\fpShots\fpShot\fpShotSlices;

class fpShot extends Model
{
    /**
     * @var fpShotSlices
     */
    public $fpShotSlices;

    /**
     * @var string
     */
    public $primaryKey;

    /**
     * @var string
     */
    public $similarity;
    protected $_name = [
        'fpShotSlices' => 'FpShotSlices',
        'primaryKey' => 'PrimaryKey',
        'similarity' => 'Similarity',
    ];

    public function validate()
    {
        if (null !== $this->fpShotSlices) {
            $this->fpShotSlices->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fpShotSlices) {
            $res['FpShotSlices'] = null !== $this->fpShotSlices ? $this->fpShotSlices->toArray($noStream) : $this->fpShotSlices;
        }

        if (null !== $this->primaryKey) {
            $res['PrimaryKey'] = $this->primaryKey;
        }

        if (null !== $this->similarity) {
            $res['Similarity'] = $this->similarity;
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
        if (isset($map['FpShotSlices'])) {
            $model->fpShotSlices = fpShotSlices::fromMap($map['FpShotSlices']);
        }

        if (isset($map['PrimaryKey'])) {
            $model->primaryKey = $map['PrimaryKey'];
        }

        if (isset($map['Similarity'])) {
            $model->similarity = $map['Similarity'];
        }

        return $model;
    }
}
