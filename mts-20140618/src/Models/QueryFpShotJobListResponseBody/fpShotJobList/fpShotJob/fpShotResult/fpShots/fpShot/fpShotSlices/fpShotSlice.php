<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob\fpShotResult\fpShots\fpShot\fpShotSlices;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob\fpShotResult\fpShots\fpShot\fpShotSlices\fpShotSlice\duplication;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob\fpShotResult\fpShots\fpShot\fpShotSlices\fpShotSlice\input;
use AlibabaCloud\Tea\Model;

class fpShotSlice extends Model
{
    /**
     * @var duplication
     */
    public $duplication;

    /**
     * @var string
     */
    public $similarity;

    /**
     * @var input
     */
    public $input;
    protected $_name = [
        'duplication' => 'Duplication',
        'similarity'  => 'Similarity',
        'input'       => 'Input',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duplication) {
            $res['Duplication'] = null !== $this->duplication ? $this->duplication->toMap() : null;
        }
        if (null !== $this->similarity) {
            $res['Similarity'] = $this->similarity;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fpShotSlice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duplication'])) {
            $model->duplication = duplication::fromMap($map['Duplication']);
        }
        if (isset($map['Similarity'])) {
            $model->similarity = $map['Similarity'];
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }

        return $model;
    }
}
