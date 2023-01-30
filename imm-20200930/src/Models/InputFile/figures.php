<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\InputFile;

use AlibabaCloud\Tea\Model;

class figures extends Model
{
    /**
     * @var string
     */
    public $figureClusterId;

    /**
     * @var string
     */
    public $figureId;

    /**
     * @var string
     */
    public $figureType;
    protected $_name = [
        'figureClusterId' => 'FigureClusterId',
        'figureId'        => 'FigureId',
        'figureType'      => 'FigureType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->figureClusterId) {
            $res['FigureClusterId'] = $this->figureClusterId;
        }
        if (null !== $this->figureId) {
            $res['FigureId'] = $this->figureId;
        }
        if (null !== $this->figureType) {
            $res['FigureType'] = $this->figureType;
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
        if (isset($map['FigureClusterId'])) {
            $model->figureClusterId = $map['FigureClusterId'];
        }
        if (isset($map['FigureId'])) {
            $model->figureId = $map['FigureId'];
        }
        if (isset($map['FigureType'])) {
            $model->figureType = $map['FigureType'];
        }

        return $model;
    }
}
