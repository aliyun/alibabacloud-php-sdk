<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob\fpShotResult\textFpShots;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob\fpShotResult\textFpShots\textFpShot\textFpShotSlices;
use AlibabaCloud\Tea\Model;

class textFpShot extends Model
{
    /**
     * @var string
     */
    public $primaryKey;

    /**
     * @var string
     */
    public $similarity;

    /**
     * @var textFpShotSlices
     */
    public $textFpShotSlices;
    protected $_name = [
        'primaryKey'       => 'PrimaryKey',
        'similarity'       => 'Similarity',
        'textFpShotSlices' => 'TextFpShotSlices',
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
        if (null !== $this->similarity) {
            $res['Similarity'] = $this->similarity;
        }
        if (null !== $this->textFpShotSlices) {
            $res['TextFpShotSlices'] = null !== $this->textFpShotSlices ? $this->textFpShotSlices->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return textFpShot
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrimaryKey'])) {
            $model->primaryKey = $map['PrimaryKey'];
        }
        if (isset($map['Similarity'])) {
            $model->similarity = $map['Similarity'];
        }
        if (isset($map['TextFpShotSlices'])) {
            $model->textFpShotSlices = textFpShotSlices::fromMap($map['TextFpShotSlices']);
        }

        return $model;
    }
}
