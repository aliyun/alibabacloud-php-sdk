<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\FigureClusterForReq\cover;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->figureId) {
            $res['FigureId'] = $this->figureId;
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
        if (isset($map['FigureId'])) {
            $model->figureId = $map['FigureId'];
        }

        return $model;
    }
}
