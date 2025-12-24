<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;

class RevertPlaybookReleaseRequest extends Model
{
    /**
     * @var bool
     */
    public $isPublish;

    /**
     * @var int
     */
    public $playReleaseId;

    /**
     * @var string
     */
    public $playbookUuid;
    protected $_name = [
        'isPublish' => 'IsPublish',
        'playReleaseId' => 'PlayReleaseId',
        'playbookUuid' => 'PlaybookUuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
