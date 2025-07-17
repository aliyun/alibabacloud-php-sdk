<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DataQualityResult\rule;

use AlibabaCloud\Tea\Model;

class errorHandlers extends Model
{
    /**
     * @example SELECT * FROM tb_api_log WHERE id IS NULL
     *
     * @var string
     */
    public $errorDataFilter;

    /**
     * @example SaveErrorData
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'errorDataFilter' => 'ErrorDataFilter',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorDataFilter) {
            $res['ErrorDataFilter'] = $this->errorDataFilter;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorHandlers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorDataFilter'])) {
            $model->errorDataFilter = $map['ErrorDataFilter'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
