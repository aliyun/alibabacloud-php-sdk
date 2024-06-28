<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class ComparePlaybooksRequest extends Model
{
    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh** (default): Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The UUID of the second version.
     *
     * This parameter is required.
     * @example sfdf2395-e814-459f-9662-xxxxx
     *
     * @var int
     */
    public $newPlaybookReleaseId;

    /**
     * @description The UUID of the first version.
     *
     * This parameter is required.
     * @example sflk23423-e814-459f-9662-xxxxx
     *
     * @var int
     */
    public $oldPlaybookReleaseId;

    /**
     * @description The UUID of the playbook.
     *
     * This parameter is required.
     * @example f916b93e-e814-459f-9662-xxxxx
     *
     * @var string
     */
    public $playbookUuid;
    protected $_name = [
        'lang'                 => 'Lang',
        'newPlaybookReleaseId' => 'NewPlaybookReleaseId',
        'oldPlaybookReleaseId' => 'OldPlaybookReleaseId',
        'playbookUuid'         => 'PlaybookUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ComparePlaybooksRequest
     */
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
