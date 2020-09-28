<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class CreatePidOrganizationRequest extends Model
{
    /**
     * @var string
     */
    public $organizationName;

    /**
     * @var string
     */
    public $parentOrganizationId;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'organizationName'     => 'OrganizationName',
        'parentOrganizationId' => 'ParentOrganizationId',
        'clientToken'          => 'ClientToken',
    ];

    public function validate()
    {
        Model::validateRequired('organizationName', $this->organizationName, true);
        Model::validateRequired('clientToken', $this->clientToken, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->organizationName) {
            $res['OrganizationName'] = $this->organizationName;
        }
        if (null !== $this->parentOrganizationId) {
            $res['ParentOrganizationId'] = $this->parentOrganizationId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePidOrganizationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrganizationName'])) {
            $model->organizationName = $map['OrganizationName'];
        }
        if (isset($map['ParentOrganizationId'])) {
            $model->parentOrganizationId = $map['ParentOrganizationId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
