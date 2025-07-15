<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListCallSummariesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example job-544789******759424
     *
     * @var string
     */
    public $contactId;

    /**
     * @var string
     */
    public $context;

    /**
     * @example 1723449513735
     *
     * @var int
     */
    public $createdTime;

    /**
     * @example creator@ccc-test
     *
     * @var string
     */
    public $creator;

    /**
     * @example editor@ccc-test
     *
     * @var string
     */
    public $editor;

    /**
     * @example ac0dd304-****-****-****-4a90010f0d38
     *
     * @var string
     */
    public $ticketId;
    protected $_name = [
        'contactId' => 'ContactId',
        'context' => 'Context',
        'createdTime' => 'CreatedTime',
        'creator' => 'Creator',
        'editor' => 'Editor',
        'ticketId' => 'TicketId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->context) {
            $res['Context'] = $this->context;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->editor) {
            $res['Editor'] = $this->editor;
        }
        if (null !== $this->ticketId) {
            $res['TicketId'] = $this->ticketId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['Context'])) {
            $model->context = $map['Context'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Editor'])) {
            $model->editor = $map['Editor'];
        }
        if (isset($map['TicketId'])) {
            $model->ticketId = $map['TicketId'];
        }

        return $model;
    }
}
