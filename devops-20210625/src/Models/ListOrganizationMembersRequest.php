<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListOrganizationMembersRequest extends Model
{
    /**
     * @var string
     */
    public $organizationMemberName;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $externUid;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var int
     */
    public $joinTimeFrom;

    /**
     * @var int
     */
    public $joinTimeTo;
    protected $_name = [
        'organizationMemberName' => 'organizationMemberName',
        'provider'               => 'provider',
        'externUid'              => 'externUid',
        'state'                  => 'state',
        'nextToken'              => 'nextToken',
        'maxResults'             => 'maxResults',
        'joinTimeFrom'           => 'joinTimeFrom',
        'joinTimeTo'             => 'joinTimeTo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->organizationMemberName) {
            $res['organizationMemberName'] = $this->organizationMemberName;
        }
        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }
        if (null !== $this->externUid) {
            $res['externUid'] = $this->externUid;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->joinTimeFrom) {
            $res['joinTimeFrom'] = $this->joinTimeFrom;
        }
        if (null !== $this->joinTimeTo) {
            $res['joinTimeTo'] = $this->joinTimeTo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOrganizationMembersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['organizationMemberName'])) {
            $model->organizationMemberName = $map['organizationMemberName'];
        }
        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }
        if (isset($map['externUid'])) {
            $model->externUid = $map['externUid'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['joinTimeFrom'])) {
            $model->joinTimeFrom = $map['joinTimeFrom'];
        }
        if (isset($map['joinTimeTo'])) {
            $model->joinTimeTo = $map['joinTimeTo'];
        }

        return $model;
    }
}
