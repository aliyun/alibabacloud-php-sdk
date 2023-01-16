<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetFigureClusterResponseBody extends Model
{
    /**
     * @var FigureCluster
     */
    public $figureCluster;

    /**
     * @example 5F74C5C9-5AC0-49F9-914D-E01589D3****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'figureCluster' => 'FigureCluster',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->figureCluster) {
            $res['FigureCluster'] = null !== $this->figureCluster ? $this->figureCluster->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFigureClusterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FigureCluster'])) {
            $model->figureCluster = FigureCluster::fromMap($map['FigureCluster']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
