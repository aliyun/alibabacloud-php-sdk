<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainConsortiumsNewResponseBody\result;

use AlibabaCloud\Tea\Model;

class antConsortiums extends Model
{
    /**
     * @var int
     */
    public $chainNum;

    /**
     * @var string
     */
    public $consortiumDescription;

    /**
     * @var string
     */
    public $consortiumId;

    /**
     * @var string
     */
    public $consortiumName;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var bool
     */
    public $isEmptyConsortium;

    /**
     * @var int
     */
    public $memberNum;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'chainNum'              => 'ChainNum',
        'consortiumDescription' => 'ConsortiumDescription',
        'consortiumId'          => 'ConsortiumId',
        'consortiumName'        => 'ConsortiumName',
        'createTime'            => 'CreateTime',
        'isEmptyConsortium'     => 'IsEmptyConsortium',
        'memberNum'             => 'MemberNum',
        'role'                  => 'Role',
        'status'                => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chainNum) {
            $res['ChainNum'] = $this->chainNum;
        }
        if (null !== $this->consortiumDescription) {
            $res['ConsortiumDescription'] = $this->consortiumDescription;
        }
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->consortiumName) {
            $res['ConsortiumName'] = $this->consortiumName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->isEmptyConsortium) {
            $res['IsEmptyConsortium'] = $this->isEmptyConsortium;
        }
        if (null !== $this->memberNum) {
            $res['MemberNum'] = $this->memberNum;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return antConsortiums
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChainNum'])) {
            $model->chainNum = $map['ChainNum'];
        }
        if (isset($map['ConsortiumDescription'])) {
            $model->consortiumDescription = $map['ConsortiumDescription'];
        }
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['ConsortiumName'])) {
            $model->consortiumName = $map['ConsortiumName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['IsEmptyConsortium'])) {
            $model->isEmptyConsortium = $map['IsEmptyConsortium'];
        }
        if (isset($map['MemberNum'])) {
            $model->memberNum = $map['MemberNum'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
