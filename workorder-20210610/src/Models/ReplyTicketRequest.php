<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20210610\Models;

use AlibabaCloud\Tea\Model;

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
    protected $_name = [
        'content'      => 'Content',
        'encrypt'      => 'Encrypt',
        'fileNameList' => 'FileNameList',
        'ticketId'     => 'TicketId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->encrypt) {
            $res['Encrypt'] = $this->encrypt;
        }
        if (null !== $this->fileNameList) {
            $res['FileNameList'] = $this->fileNameList;
        }
        if (null !== $this->ticketId) {
            $res['TicketId'] = $this->ticketId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReplyTicketRequest
     */
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
                $model->fileNameList = $map['FileNameList'];
            }
        }
        if (isset($map['TicketId'])) {
            $model->ticketId = $map['TicketId'];
        }

        return $model;
    }
}
