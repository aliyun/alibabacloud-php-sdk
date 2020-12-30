<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models;

use AlibabaCloud\Tea\Model;

class GetBranchInfoRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $subUserId;

    /**
     * @var string
     */
    public $branchName;
    protected $_name = [
        'accessToken'    => 'AccessToken',
        'organizationId' => 'OrganizationId',
        'subUserId'      => 'SubUserId',
        'branchName'     => 'BranchName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
        }
        if (null !== $this->branchName) {
            $res['BranchName'] = $this->branchName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBranchInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }
        if (isset($map['BranchName'])) {
            $model->branchName = $map['BranchName'];
        }

        return $model;
    }
}
