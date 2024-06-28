<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class RevertPlaybookReleaseRequest extends Model
{
    /**
     * @description Specifies whether to directly publish the new playbook after the rollback.
     *
     *   **true** (default)
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $isPublish;

    /**
     * @description The version of the playbook that you want to publish.
     *
     * This parameter is required.
     * @example 3f97b56e-064e-47e7-a309-xxxxxxx
     *
     * @var int
     */
    public $playReleaseId;

    /**
     * @description The UUID of the playbook.
     *
     * This parameter is required.
     * @example 185295a1-c987-4b64-8796-xxxxxxxx
     *
     * @var string
     */
    public $playbookUuid;
    protected $_name = [
        'isPublish'     => 'IsPublish',
        'playReleaseId' => 'PlayReleaseId',
        'playbookUuid'  => 'PlaybookUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isPublish) {
            $res['IsPublish'] = $this->isPublish;
        }
        if (null !== $this->playReleaseId) {
            $res['PlayReleaseId'] = $this->playReleaseId;
        }
        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RevertPlaybookReleaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsPublish'])) {
            $model->isPublish = $map['IsPublish'];
        }
        if (isset($map['PlayReleaseId'])) {
            $model->playReleaseId = $map['PlayReleaseId'];
        }
        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        return $model;
    }
}
