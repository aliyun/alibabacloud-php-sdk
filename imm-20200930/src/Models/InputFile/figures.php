<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\InputFile;

use AlibabaCloud\Dara\Model;

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
        'figureId' => 'FigureId',
        'figureType' => 'FigureType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
