<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;

class ComparePlaybooksRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $newPlaybookReleaseId;

    /**
     * @var int
     */
    public $oldPlaybookReleaseId;

    /**
     * @var string
     */
    public $playbookUuid;
    protected $_name = [
        'lang' => 'Lang',
        'newPlaybookReleaseId' => 'NewPlaybookReleaseId',
        'oldPlaybookReleaseId' => 'OldPlaybookReleaseId',
        'playbookUuid' => 'PlaybookUuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->newPlaybookReleaseId) {
            $res['NewPlaybookReleaseId'] = $this->newPlaybookReleaseId;
        }

        if (null !== $this->oldPlaybookReleaseId) {
            $res['OldPlaybookReleaseId'] = $this->oldPlaybookReleaseId;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['NewPlaybookReleaseId'])) {
            $model->newPlaybookReleaseId = $map['NewPlaybookReleaseId'];
        }

        if (isset($map['OldPlaybookReleaseId'])) {
            $model->oldPlaybookReleaseId = $map['OldPlaybookReleaseId'];
        }

        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        return $model;
    }
}
