<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeConsortiumMembersResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example consortium-lianmenyumingyi-hc5d1bwlulg7
     *
     * @var string
     */
    public $consortiumId;

    /**
     * @example Description
     *
     * @var string
     */
    public $description;

    /**
     * @example Domain
     *
     * @var string
     */
    public $domain;

    /**
     * @example 1544411108000
     *
     * @var string
     */
    public $joinedTime;

    /**
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @example peers-aaaaaa2-1eqnj5o5w9dt3
     *
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'consortiumId'   => 'ConsortiumId',
        'description'    => 'Description',
        'domain'         => 'Domain',
        'joinedTime'     => 'JoinedTime',
        'name'           => 'Name',
        'organizationId' => 'OrganizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->joinedTime) {
            $res['JoinedTime'] = $this->joinedTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['JoinedTime'])) {
            $model->joinedTime = $map['JoinedTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }

        return $model;
    }
}
