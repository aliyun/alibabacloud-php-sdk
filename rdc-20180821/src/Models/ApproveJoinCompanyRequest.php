<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdc\V20180821\Models;

use AlibabaCloud\Tea\Model;

class ApproveJoinCompanyRequest extends Model
{
    /**
     * @var string
     */
    public $corpIdentifier;

    /**
     * @var string
     */
    public $applicationIds;
    protected $_name = [
        'corpIdentifier' => 'CorpIdentifier',
        'applicationIds' => 'ApplicationIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpIdentifier) {
            $res['CorpIdentifier'] = $this->corpIdentifier;
        }
        if (null !== $this->applicationIds) {
            $res['ApplicationIds'] = $this->applicationIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApproveJoinCompanyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpIdentifier'])) {
            $model->corpIdentifier = $map['CorpIdentifier'];
        }
        if (isset($map['ApplicationIds'])) {
            $model->applicationIds = $map['ApplicationIds'];
        }

        return $model;
    }
}
