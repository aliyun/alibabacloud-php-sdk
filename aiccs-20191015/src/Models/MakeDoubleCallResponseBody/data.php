<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\MakeDoubleCallResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 68255155365620598
     *
     * @var string
     */
    public $acid;
    protected $_name = [
        'acid' => 'Acid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acid) {
            $res['Acid'] = $this->acid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Acid'])) {
            $model->acid = $map['Acid'];
        }

        return $model;
    }
}
