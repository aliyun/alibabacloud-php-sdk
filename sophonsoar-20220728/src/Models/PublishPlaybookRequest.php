<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class PublishPlaybookRequest extends Model
{
    /**
     * @description The description of the released version.
     *
     * @example This is a waf processing playbook
     *
     * @var string
     */
    public $description;

    /**
     * @description The playbook UUID.
     *
     * This parameter is required.
     * @example ac343acc-1a61-4084-9a1c-xxxxxxx
     *
     * @var string
     */
    public $playbookUuid;
    protected $_name = [
        'description'  => 'Description',
        'playbookUuid' => 'PlaybookUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PublishPlaybookRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        return $model;
    }
}
