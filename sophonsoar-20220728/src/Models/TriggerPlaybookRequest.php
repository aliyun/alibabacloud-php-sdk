<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class TriggerPlaybookRequest extends Model
{
    /**
     * @description The input parameters of the playbook.
     *
     * This parameter is required.
     * @example {
     * }
     * @var string
     */
    public $inputParam;

    /**
     * @description The playbook UUID.
     *
     * This parameter is required.
     * @example 2a687089-d4dd-47d4-9709-xxxxxxxx
     *
     * @var string
     */
    public $playbookUuid;
    protected $_name = [
        'inputParam'   => 'InputParam',
        'playbookUuid' => 'PlaybookUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputParam) {
            $res['InputParam'] = $this->inputParam;
        }
        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TriggerPlaybookRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputParam'])) {
            $model->inputParam = $map['InputParam'];
        }
        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        return $model;
    }
}
