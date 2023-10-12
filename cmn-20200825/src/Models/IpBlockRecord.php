<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\IpBlockRecord\detail;
use AlibabaCloud\Tea\Model;

class IpBlockRecord extends Model
{
    /**
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 张三
     *
     * @var int
     */
    public $creator;

    /**
     * @example ""
     *
     * @var string
     */
    public $description;

    /**
     * @var detail[]
     */
    public $detail;

    /**
     * @var string[]
     */
    public $ipBlockCode;

    /**
     * @example adaieaoweif_s3834
     *
     * @var string
     */
    public $ipBlockRecordId;

    /**
     * @example PRIVATE
     *
     * @var string
     */
    public $netType;

    /**
     * @example Apply
     *
     * @var string
     */
    public $recordType;

    /**
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @example 申请xx地址
     *
     * @var string
     */
    public $title;

    /**
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 123
     *
     * @var string
     */
    public $workNo;

    /**
     * @example 西安-百城
     *
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'creator'         => 'Creator',
        'description'     => 'Description',
        'detail'          => 'Detail',
        'ipBlockCode'     => 'IpBlockCode',
        'ipBlockRecordId' => 'IpBlockRecordId',
        'netType'         => 'NetType',
        'recordType'      => 'RecordType',
        'status'          => 'Status',
        'title'           => 'Title',
        'updateTime'      => 'UpdateTime',
        'workNo'          => 'WorkNo',
        'zoneName'        => 'ZoneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->detail) {
            $res['Detail'] = [];
            if (null !== $this->detail && \is_array($this->detail)) {
                $n = 0;
                foreach ($this->detail as $item) {
                    $res['Detail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ipBlockCode) {
            $res['IpBlockCode'] = $this->ipBlockCode;
        }
        if (null !== $this->ipBlockRecordId) {
            $res['IpBlockRecordId'] = $this->ipBlockRecordId;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->recordType) {
            $res['RecordType'] = $this->recordType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->workNo) {
            $res['WorkNo'] = $this->workNo;
        }
        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IpBlockRecord
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Detail'])) {
            if (!empty($map['Detail'])) {
                $model->detail = [];
                $n             = 0;
                foreach ($map['Detail'] as $item) {
                    $model->detail[$n++] = null !== $item ? detail::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IpBlockCode'])) {
            if (!empty($map['IpBlockCode'])) {
                $model->ipBlockCode = $map['IpBlockCode'];
            }
        }
        if (isset($map['IpBlockRecordId'])) {
            $model->ipBlockRecordId = $map['IpBlockRecordId'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['RecordType'])) {
            $model->recordType = $map['RecordType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['WorkNo'])) {
            $model->workNo = $map['WorkNo'];
        }
        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}
