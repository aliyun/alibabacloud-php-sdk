<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models;

use AlibabaCloud\Tea\Model;

class ListMergeRequestCommentsRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $fromCommit;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $toCommit;
    protected $_name = [
        'accessToken'    => 'AccessToken',
        'fromCommit'     => 'FromCommit',
        'organizationId' => 'OrganizationId',
        'toCommit'       => 'ToCommit',
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
        if (null !== $this->fromCommit) {
            $res['FromCommit'] = $this->fromCommit;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->toCommit) {
            $res['ToCommit'] = $this->toCommit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMergeRequestCommentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['FromCommit'])) {
            $model->fromCommit = $map['FromCommit'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['ToCommit'])) {
            $model->toCommit = $map['ToCommit'];
        }

        return $model;
    }
}
