<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAccesskeyLeakListResponseBody;

use AlibabaCloud\Tea\Model;

class accessKeyLeakList extends Model
{
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
    public $asset;

    /**
     * @var string
     */
    public $dealTime;

    /**
     * @var string
     */
    public $dealType;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

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
    public $url;

    /**
     * @var string
     */
    public $userType;
    protected $_name = [
        'accesskeyId' => 'AccesskeyId',
        'aliUserName' => 'AliUserName',
        'asset'       => 'Asset',
        'dealTime'    => 'DealTime',
        'dealType'    => 'DealType',
        'gmtModified' => 'GmtModified',
        'id'          => 'Id',
        'status'      => 'Status',
        'type'        => 'Type',
        'url'         => 'Url',
        'userType'    => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accesskeyId) {
            $res['AccesskeyId'] = $this->accesskeyId;
        }
        if (null !== $this->aliUserName) {
            $res['AliUserName'] = $this->aliUserName;
        }
        if (null !== $this->asset) {
            $res['Asset'] = $this->asset;
        }
        if (null !== $this->dealTime) {
            $res['DealTime'] = $this->dealTime;
        }
        if (null !== $this->dealType) {
            $res['DealType'] = $this->dealType;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
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
        if (isset($map['AccesskeyId'])) {
            $model->accesskeyId = $map['AccesskeyId'];
        }
        if (isset($map['AliUserName'])) {
            $model->aliUserName = $map['AliUserName'];
        }
        if (isset($map['Asset'])) {
            $model->asset = $map['Asset'];
        }
        if (isset($map['DealTime'])) {
            $model->dealTime = $map['DealTime'];
        }
        if (isset($map['DealType'])) {
            $model->dealType = $map['DealType'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
