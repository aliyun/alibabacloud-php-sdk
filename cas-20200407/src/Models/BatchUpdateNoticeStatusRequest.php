<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;

class BatchUpdateNoticeStatusRequest extends Model
{
    /**
     * @var string
     */
    public $ids;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $noticeBiz;

    /**
     * @var string
     */
    public $noticeStatus;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'ids' => 'Ids',
        'lang' => 'Lang',
        'noticeBiz' => 'NoticeBiz',
        'noticeStatus' => 'NoticeStatus',
        'sourceIp' => 'SourceIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->noticeBiz) {
            $res['NoticeBiz'] = $this->noticeBiz;
        }

        if (null !== $this->noticeStatus) {
            $res['NoticeStatus'] = $this->noticeStatus;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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
        if (isset($map['Ids'])) {
            $model->ids = $map['Ids'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['NoticeBiz'])) {
            $model->noticeBiz = $map['NoticeBiz'];
        }

        if (isset($map['NoticeStatus'])) {
            $model->noticeStatus = $map['NoticeStatus'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
