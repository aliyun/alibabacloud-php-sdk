<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainConsortiumsResponseBody\result;

use AlibabaCloud\Tea\Model;

class antConsortiums extends Model
{
    /**
     * @var string
     */
    public $consortiumDescription;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $consortiumId;

    /**
     * @var int
     */
    public $createTime;

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
    public $consortiumName;

    /**
     * @var int
     */
    public $chainNum;
    protected $_name = [
        'consortiumDescription' => 'ConsortiumDescription',
        'status'                => 'Status',
        'consortiumId'          => 'ConsortiumId',
        'createTime'            => 'CreateTime',
        'memberNum'             => 'MemberNum',
        'role'                  => 'Role',
        'consortiumName'        => 'ConsortiumName',
        'chainNum'              => 'ChainNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consortiumDescription) {
            $res['ConsortiumDescription'] = $this->consortiumDescription;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->memberNum) {
            $res['MemberNum'] = $this->memberNum;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->consortiumName) {
            $res['ConsortiumName'] = $this->consortiumName;
        }
        if (null !== $this->chainNum) {
            $res['ChainNum'] = $this->chainNum;
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
        if (isset($map['ConsortiumDescription'])) {
            $model->consortiumDescription = $map['ConsortiumDescription'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['MemberNum'])) {
            $model->memberNum = $map['MemberNum'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['ConsortiumName'])) {
            $model->consortiumName = $map['ConsortiumName'];
        }
        if (isset($map['ChainNum'])) {
            $model->chainNum = $map['ChainNum'];
        }

        return $model;
    }
}
