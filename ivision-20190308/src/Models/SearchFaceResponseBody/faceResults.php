<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivision\V20190308\Models\SearchFaceResponseBody;

use AlibabaCloud\Tea\Model;

class faceResults extends Model
{
    /**
     * @var string
     */
    public $faceToken;

    /**
     * @var float
     */
    public $probability;
    protected $_name = [
        'faceToken'   => 'FaceToken',
        'probability' => 'Probability',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceToken) {
            $res['FaceToken'] = $this->faceToken;
        }
        if (null !== $this->probability) {
            $res['Probability'] = $this->probability;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceToken'])) {
            $model->faceToken = $map['FaceToken'];
        }
        if (isset($map['Probability'])) {
            $model->probability = $map['Probability'];
        }

        return $model;
    }
}
