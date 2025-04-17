<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\SearchImageFigureClusterResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\Boundary;

class clusters extends Model
{
    /**
     * @var Boundary
     */
    public $boundary;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var float
     */
    public $similarity;
    protected $_name = [
        'boundary' => 'Boundary',
        'clusterId' => 'ClusterId',
        'similarity' => 'Similarity',
    ];

    public function validate()
    {
        if (null !== $this->boundary) {
            $this->boundary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->boundary) {
            $res['Boundary'] = null !== $this->boundary ? $this->boundary->toArray($noStream) : $this->boundary;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
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
