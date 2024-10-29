<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmExtractTaskRequest;

use AlibabaCloud\Tea\Model;

class csvControl extends Model
{
    /**
     * @var int
     */
    public $embedColumn;

    /**
     * @var int
     */
    public $embedPrecision;

    /**
     * @var string
     */
    public $method;
    protected $_name = [
        'embedColumn'    => 'EmbedColumn',
        'embedPrecision' => 'EmbedPrecision',
        'method'         => 'Method',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->embedColumn) {
            $res['EmbedColumn'] = $this->embedColumn;
        }
        if (null !== $this->embedPrecision) {
            $res['EmbedPrecision'] = $this->embedPrecision;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return csvControl
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EmbedColumn'])) {
            $model->embedColumn = $map['EmbedColumn'];
        }
        if (isset($map['EmbedPrecision'])) {
            $model->embedPrecision = $map['EmbedPrecision'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }

        return $model;
    }
}
