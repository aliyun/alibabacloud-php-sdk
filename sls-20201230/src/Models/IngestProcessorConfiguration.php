<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class IngestProcessorConfiguration extends Model
{
    /**
     * @example keep
     *
     * @var string
     */
    public $parseFail;

    /**
     * @description This parameter is required.
     *
     * @example * | project content
     *
     * @var string
     */
    public $spl;
    protected $_name = [
        'parseFail' => 'parseFail',
        'spl'       => 'spl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parseFail) {
            $res['parseFail'] = $this->parseFail;
        }
        if (null !== $this->spl) {
            $res['spl'] = $this->spl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IngestProcessorConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['parseFail'])) {
            $model->parseFail = $map['parseFail'];
        }
        if (isset($map['spl'])) {
            $model->spl = $map['spl'];
        }

        return $model;
    }
}
