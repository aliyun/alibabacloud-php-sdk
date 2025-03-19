<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetAccountDeletionCheckResultResponseBody\accountDeletionCheckResultInfo;

use AlibabaCloud\Tea\Model;

class notAllowReason extends Model
{
    /**
     * @description The ID of the check item.
     *
     * @example NON_SP_efc
     *
     * @var string
     */
    public $checkId;

    /**
     * @description The name of the cloud service to which the check item belongs.
     *
     * @example Enterprise finance
     *
     * @var string
     */
    public $checkName;

    /**
     * @description The description of the check item.
     *
     * @example This account is an Enterprise Finance associated account. Please remove the financial association of this account before deleting it.
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'checkId' => 'CheckId',
        'checkName' => 'CheckName',
        'description' => 'Description',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->checkName) {
            $res['CheckName'] = $this->checkName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notAllowReason
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['CheckName'])) {
            $model->checkName = $map['CheckName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
