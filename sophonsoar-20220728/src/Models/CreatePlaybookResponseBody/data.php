<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\CreatePlaybookResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The UUID of the playbook.
     *
     * @example 9e38111e-9794-4784-9ca8-xxxxxxx
     *
     * @var string
     */
    public $playbookUuid;
    protected $_name = [
        'playbookUuid' => 'PlaybookUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
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
        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        return $model;
    }
}
