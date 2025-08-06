<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoDNAResultResponseBody\AIVideoDNAResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoDNAResultResponseBody\AIVideoDNAResult\fpShots\fpShotSlices;

class fpShots extends Model
{
    /**
     * @var fpShotSlices[]
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
        if (\is_array($this->fpShotSlices)) {
            Model::validateArray($this->fpShotSlices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fpShotSlices) {
            if (\is_array($this->fpShotSlices)) {
                $res['FpShotSlices'] = [];
                $n1 = 0;
                foreach ($this->fpShotSlices as $item1) {
                    $res['FpShotSlices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['FpShotSlices'])) {
                $model->fpShotSlices = [];
                $n1 = 0;
                foreach ($map['FpShotSlices'] as $item1) {
                    $model->fpShotSlices[$n1] = fpShotSlices::fromMap($item1);
                    ++$n1;
                }
            }
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
