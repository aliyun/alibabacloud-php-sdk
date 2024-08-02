<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ConsumeProcessorConfiguration extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example * | project content
     *
     * @var string
     */
    public $spl;
    protected $_name = [
        'spl' => 'spl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spl) {
            $res['spl'] = $this->spl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConsumeProcessorConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['spl'])) {
            $model->spl = $map['spl'];
        }

        return $model;
    }
}
