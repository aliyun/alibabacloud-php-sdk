<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountDeletionCheckResultResponseBody\accountDeletionCheckResultInfo;

use AlibabaCloud\Tea\Model;

class abandonableChecks extends Model
{
    /**
     * @var string
     */
    public $checkId;

    /**
     * @var string
     */
    public $checkName;

    /**
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
