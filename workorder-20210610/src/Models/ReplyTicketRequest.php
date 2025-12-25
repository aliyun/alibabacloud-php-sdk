<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20210610\Models;

use AlibabaCloud\Dara\Model;

class ReplyTicketRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var bool
     */
    public $encrypt;

    /**
     * @var string[]
     */
    public $fileNameList;

    /**
     * @var string
     */
    public $ticketId;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'content' => 'Content',
        'encrypt' => 'Encrypt',
        'fileNameList' => 'FileNameList',
        'ticketId' => 'TicketId',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        if (\is_array($this->fileNameList)) {
            Model::validateArray($this->fileNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->encrypt) {
            $res['Encrypt'] = $this->encrypt;
        }

        if (null !== $this->fileNameList) {
            if (\is_array($this->fileNameList)) {
                $res['FileNameList'] = [];
                $n1 = 0;
                foreach ($this->fileNameList as $item1) {
                    $res['FileNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ticketId) {
            $res['TicketId'] = $this->ticketId;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Encrypt'])) {
            $model->encrypt = $map['Encrypt'];
        }

        if (isset($map['FileNameList'])) {
            if (!empty($map['FileNameList'])) {
                $model->fileNameList = [];
                $n1 = 0;
                foreach ($map['FileNameList'] as $item1) {
                    $model->fileNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TicketId'])) {
            $model->ticketId = $map['TicketId'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
