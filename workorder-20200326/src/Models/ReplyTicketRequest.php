<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20200326\Models;

use AlibabaCloud\Tea\Model;

class ReplyTicketRequest extends Model
{
    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $ticketId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $secretContent;
    protected $_name = [
        'language'      => 'Language',
        'ticketId'      => 'TicketId',
        'content'       => 'Content',
        'secretContent' => 'SecretContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->ticketId) {
            $res['TicketId'] = $this->ticketId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->secretContent) {
            $res['SecretContent'] = $this->secretContent;
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
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['TicketId'])) {
            $model->ticketId = $map['TicketId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['SecretContent'])) {
            $model->secretContent = $map['SecretContent'];
        }

        return $model;
    }
}
