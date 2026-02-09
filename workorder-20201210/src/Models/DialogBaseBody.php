<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20201210\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Workorder\V20201210\Models\DialogBaseBody\attachments;
use AlibabaCloud\SDK\Workorder\V20201210\Models\DialogBaseBody\dataInfo;
use AlibabaCloud\SDK\Workorder\V20201210\Models\DialogBaseBody\footerInfo;
use AlibabaCloud\SDK\Workorder\V20201210\Models\DialogBaseBody\userInfo;

class DialogBaseBody extends Model
{
    /**
     * @var attachments[]
     */
    public $attachments;

    /**
     * @var string
     */
    public $channelCode;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var dataInfo
     */
    public $dataInfo;

    /**
     * @var int
     */
    public $dialogId;

    /**
     * @var footerInfo
     */
    public $footerInfo;

    /**
     * @var string[]
     */
    public $hitWords;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var DialogBaseBody
     */
    public $referInfo;

    /**
     * @var int
     */
    public $stage;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $ticketId;

    /**
     * @var int
     */
    public $ticketStatus;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $tip;

    /**
     * @var int
     */
    public $type;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'attachments' => 'Attachments',
        'channelCode' => 'ChannelCode',
        'createTime' => 'CreateTime',
        'dataInfo' => 'DataInfo',
        'dialogId' => 'DialogId',
        'footerInfo' => 'FooterInfo',
        'hitWords' => 'HitWords',
        'modifiedTime' => 'ModifiedTime',
        'referInfo' => 'ReferInfo',
        'stage' => 'Stage',
        'status' => 'Status',
        'ticketId' => 'TicketId',
        'ticketStatus' => 'TicketStatus',
        'timestamp' => 'Timestamp',
        'tip' => 'Tip',
        'type' => 'Type',
        'userInfo' => 'UserInfo',
    ];

    public function validate()
    {
        if (\is_array($this->attachments)) {
            Model::validateArray($this->attachments);
        }
        if (null !== $this->dataInfo) {
            $this->dataInfo->validate();
        }
        if (null !== $this->footerInfo) {
            $this->footerInfo->validate();
        }
        if (\is_array($this->hitWords)) {
            Model::validateArray($this->hitWords);
        }
        if (null !== $this->referInfo) {
            $this->referInfo->validate();
        }
        if (null !== $this->userInfo) {
            $this->userInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachments) {
            if (\is_array($this->attachments)) {
                $res['Attachments'] = [];
                $n1 = 0;
                foreach ($this->attachments as $item1) {
                    $res['Attachments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->channelCode) {
            $res['ChannelCode'] = $this->channelCode;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dataInfo) {
            $res['DataInfo'] = null !== $this->dataInfo ? $this->dataInfo->toArray($noStream) : $this->dataInfo;
        }

        if (null !== $this->dialogId) {
            $res['DialogId'] = $this->dialogId;
        }

        if (null !== $this->footerInfo) {
            $res['FooterInfo'] = null !== $this->footerInfo ? $this->footerInfo->toArray($noStream) : $this->footerInfo;
        }

        if (null !== $this->hitWords) {
            if (\is_array($this->hitWords)) {
                $res['HitWords'] = [];
                $n1 = 0;
                foreach ($this->hitWords as $item1) {
                    $res['HitWords'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->referInfo) {
            $res['ReferInfo'] = null !== $this->referInfo ? $this->referInfo->toArray($noStream) : $this->referInfo;
        }

        if (null !== $this->stage) {
            $res['Stage'] = $this->stage;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->ticketId) {
            $res['TicketId'] = $this->ticketId;
        }

        if (null !== $this->ticketStatus) {
            $res['TicketStatus'] = $this->ticketStatus;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        if (null !== $this->tip) {
            $res['Tip'] = $this->tip;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toArray($noStream) : $this->userInfo;
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
        if (isset($map['Attachments'])) {
            if (!empty($map['Attachments'])) {
                $model->attachments = [];
                $n1 = 0;
                foreach ($map['Attachments'] as $item1) {
                    $model->attachments[$n1] = attachments::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ChannelCode'])) {
            $model->channelCode = $map['ChannelCode'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DataInfo'])) {
            $model->dataInfo = dataInfo::fromMap($map['DataInfo']);
        }

        if (isset($map['DialogId'])) {
            $model->dialogId = $map['DialogId'];
        }

        if (isset($map['FooterInfo'])) {
            $model->footerInfo = footerInfo::fromMap($map['FooterInfo']);
        }

        if (isset($map['HitWords'])) {
            if (!empty($map['HitWords'])) {
                $model->hitWords = [];
                $n1 = 0;
                foreach ($map['HitWords'] as $item1) {
                    $model->hitWords[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['ReferInfo'])) {
            $model->referInfo = self::fromMap($map['ReferInfo']);
        }

        if (isset($map['Stage'])) {
            $model->stage = $map['Stage'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TicketId'])) {
            $model->ticketId = $map['TicketId'];
        }

        if (isset($map['TicketStatus'])) {
            $model->ticketStatus = $map['TicketStatus'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        if (isset($map['Tip'])) {
            $model->tip = $map['Tip'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
