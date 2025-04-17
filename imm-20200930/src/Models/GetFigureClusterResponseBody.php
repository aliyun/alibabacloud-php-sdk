<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class GetFigureClusterResponseBody extends Model
{
    /**
     * @var FigureCluster
     */
    public $figureCluster;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'figureCluster' => 'FigureCluster',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->figureCluster) {
            $this->figureCluster->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->figureCluster) {
            $res['FigureCluster'] = null !== $this->figureCluster ? $this->figureCluster->toArray($noStream) : $this->figureCluster;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['FigureCluster'])) {
            $model->figureCluster = FigureCluster::fromMap($map['FigureCluster']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
