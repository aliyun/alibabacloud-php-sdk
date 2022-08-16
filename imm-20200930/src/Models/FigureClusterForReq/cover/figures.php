<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\FigureClusterForReq\cover;

use AlibabaCloud\Tea\Model;

class figures extends Model
{
    /**
     * @var string
     */
    public $figureId;
    protected $_name = [
        'figureId' => 'FigureId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->figureId) {
            $res['FigureId'] = $this->figureId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return figures
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FigureId'])) {
            $model->figureId = $map['FigureId'];
        }

        return $model;
    }
}
