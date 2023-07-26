<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetAccountDeletionCheckResultResponseBody\accountDeletionCheckResultInfo;

use AlibabaCloud\Tea\Model;

class abandonableChecks extends Model
{
    /**
     * @description The ID of the check item.
     *
     * @example NON_SP_cs
     *
     * @var string
     */
    public $checkId;

    /**
     * @description The name of the cloud service to which the check item belongs.
     *
     * @example Container Service for Kubernetes
     *
     * @var string
     */
    public $checkName;

    /**
     * @description The description of the check item.
     *
     * @example An instance of a cloud service is running within the member. Submit a ticket to contact Alibaba Cloud technical support.
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'checkId'     => 'CheckId',
        'checkName'   => 'CheckName',
        'description' => 'Description',
    ];

    public function validate()
    {
    }

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
     * @return abandonableChecks
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
