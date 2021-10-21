<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryOfficialFileCustomListResponseBody\data;

use AlibabaCloud\Tea\Model;

class customList extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $endAcceptTime;

    /**
     * @var int
     */
    public $startAcceptTime;
    protected $_name = [
        'status'          => 'Status',
        'expireTime'      => 'ExpireTime',
        'remark'          => 'Remark',
        'downloadUrl'     => 'DownloadUrl',
        'createTime'      => 'CreateTime',
        'endAcceptTime'   => 'EndAcceptTime',
        'startAcceptTime' => 'StartAcceptTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endAcceptTime) {
            $res['EndAcceptTime'] = $this->endAcceptTime;
        }
        if (null !== $this->startAcceptTime) {
            $res['StartAcceptTime'] = $this->startAcceptTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndAcceptTime'])) {
            $model->endAcceptTime = $map['EndAcceptTime'];
        }
        if (isset($map['StartAcceptTime'])) {
            $model->startAcceptTime = $map['StartAcceptTime'];
        }

        return $model;
    }
}
