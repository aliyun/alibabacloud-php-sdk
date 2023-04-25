<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\CreateCampaignRequest;

use AlibabaCloud\Tea\Model;

class caseList extends Model
{
    /**
     * @var string
     */
    public $customVariables;

    /**
     * @example 1888888888
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @example 01
     *
     * @var string
     */
    public $referenceId;
    protected $_name = [
        'customVariables' => 'CustomVariables',
        'phoneNumber'     => 'PhoneNumber',
        'referenceId'     => 'ReferenceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customVariables) {
            $res['CustomVariables'] = $this->customVariables;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->referenceId) {
            $res['ReferenceId'] = $this->referenceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return caseList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomVariables'])) {
            $model->customVariables = $map['CustomVariables'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['ReferenceId'])) {
            $model->referenceId = $map['ReferenceId'];
        }

        return $model;
    }
}
