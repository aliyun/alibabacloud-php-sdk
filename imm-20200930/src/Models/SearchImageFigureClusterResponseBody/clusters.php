<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\SearchImageFigureClusterResponseBody;

use AlibabaCloud\SDK\Imm\V20200930\Models\Boundary;
use AlibabaCloud\Tea\Model;

class clusters extends Model
{
    /**
     * @description The bounding box of the face.
     *
     * @var Boundary
     */
    public $boundary;

    /**
     * @description The ID of the face cluster that contains faces similar to the face within the bounding box.
     *
     * @example Cluster-ca730577-06b1-42c7-a25b-8f2c7******
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The similarity between the face within the bounding box and the face cluster. Valid value: 0 to 1.
     *
     * @example 0.87413794
     *
     * @var float
     */
    public $similarity;
    protected $_name = [
        'boundary'   => 'Boundary',
        'clusterId'  => 'ClusterId',
        'similarity' => 'Similarity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boundary) {
            $res['Boundary'] = null !== $this->boundary ? $this->boundary->toMap() : null;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->similarity) {
            $res['Similarity'] = $this->similarity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Boundary'])) {
            $model->boundary = Boundary::fromMap($map['Boundary']);
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Similarity'])) {
            $model->similarity = $map['Similarity'];
        }

        return $model;
    }
}
