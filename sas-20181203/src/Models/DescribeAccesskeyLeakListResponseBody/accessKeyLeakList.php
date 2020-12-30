<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAccesskeyLeakListResponseBody;

use AlibabaCloud\Tea\Model;

class accessKeyLeakList extends Model
{
    /**
     * @var string
     */
    public $dealTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $userType;

    /**
     * @var string
     */
    public $accesskeyId;

    /**
     * @var string
     */
    public $aliUserName;

    /**
     * @var string
     */
    public $dealType;

    /**
     * @var string
     */
    public $url;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $asset;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'dealTime'    => 'DealTime',
        'status'      => 'Status',
        'type'        => 'Type',
        'userType'    => 'UserType',
        'accesskeyId' => 'AccesskeyId',
        'aliUserName' => 'AliUserName',
        'dealType'    => 'DealType',
        'url'         => 'Url',
        'gmtModified' => 'GmtModified',
        'asset'       => 'Asset',
        'id'          => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dealTime) {
            $res['DealTime'] = $this->dealTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }
        if (null !== $this->accesskeyId) {
            $res['AccesskeyId'] = $this->accesskeyId;
        }
        if (null !== $this->aliUserName) {
            $res['AliUserName'] = $this->aliUserName;
        }
        if (null !== $this->dealType) {
            $res['DealType'] = $this->dealType;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->asset) {
            $res['Asset'] = $this->asset;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessKeyLeakList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DealTime'])) {
            $model->dealTime = $map['DealTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }
        if (isset($map['AccesskeyId'])) {
            $model->accesskeyId = $map['AccesskeyId'];
        }
        if (isset($map['AliUserName'])) {
            $model->aliUserName = $map['AliUserName'];
        }
        if (isset($map['DealType'])) {
            $model->dealType = $map['DealType'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Asset'])) {
            $model->asset = $map['Asset'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
