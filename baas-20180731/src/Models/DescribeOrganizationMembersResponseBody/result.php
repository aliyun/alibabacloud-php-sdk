<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationMembersResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example consortium-lianmenyumingyi-hc5d1bwl****
     *
     * @var string
     */
    public $consortiumId;

    /**
     * @example name
     *
     * @var string
     */
    public $consortiumName;

    /**
     * @example desc
     *
     * @var string
     */
    public $description;

    /**
     * @example domain
     *
     * @var string
     */
    public $domain;

    /**
     * @description Id
     *
     * @example 3
     *
     * @var string
     */
    public $id;

    /**
     * @example 1533025590
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
     * @example Running
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'consortiumId'   => 'ConsortiumId',
        'consortiumName' => 'ConsortiumName',
        'description'    => 'Description',
        'domain'         => 'Domain',
        'id'             => 'Id',
        'joinedTime'     => 'JoinedTime',
        'name'           => 'Name',
        'state'          => 'State',
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
        if (null !== $this->consortiumName) {
            $res['ConsortiumName'] = $this->consortiumName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->joinedTime) {
            $res['JoinedTime'] = $this->joinedTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['ConsortiumName'])) {
            $model->consortiumName = $map['ConsortiumName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['JoinedTime'])) {
            $model->joinedTime = $map['JoinedTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
