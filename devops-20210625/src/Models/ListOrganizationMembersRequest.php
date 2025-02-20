<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class ListOrganizationMembersRequest extends Model
{
    /**
     * @var bool
     */
    public $containsExternInfo;
    /**
     * @var string
     */
    public $externUid;
    /**
     * @var int
     */
    public $joinTimeFrom;
    /**
     * @var int
     */
    public $joinTimeTo;
    /**
     * @var int
     */
    public $maxResults;
    /**
     * @var string
     */
    public $nextToken;
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
    public $state;
    protected $_name = [
        'containsExternInfo'     => 'containsExternInfo',
        'externUid'              => 'externUid',
        'joinTimeFrom'           => 'joinTimeFrom',
        'joinTimeTo'             => 'joinTimeTo',
        'maxResults'             => 'maxResults',
        'nextToken'              => 'nextToken',
        'organizationMemberName' => 'organizationMemberName',
        'provider'               => 'provider',
        'state'                  => 'state',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containsExternInfo) {
            $res['containsExternInfo'] = $this->containsExternInfo;
        }

        if (null !== $this->externUid) {
            $res['externUid'] = $this->externUid;
        }

        if (null !== $this->joinTimeFrom) {
            $res['joinTimeFrom'] = $this->joinTimeFrom;
        }

        if (null !== $this->joinTimeTo) {
            $res['joinTimeTo'] = $this->joinTimeTo;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->organizationMemberName) {
            $res['organizationMemberName'] = $this->organizationMemberName;
        }

        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['containsExternInfo'])) {
            $model->containsExternInfo = $map['containsExternInfo'];
        }

        if (isset($map['externUid'])) {
            $model->externUid = $map['externUid'];
        }

        if (isset($map['joinTimeFrom'])) {
            $model->joinTimeFrom = $map['joinTimeFrom'];
        }

        if (isset($map['joinTimeTo'])) {
            $model->joinTimeTo = $map['joinTimeTo'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['organizationMemberName'])) {
            $model->organizationMemberName = $map['organizationMemberName'];
        }

        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        return $model;
    }
}
