<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListNotesResponseBody\notes;
use AlibabaCloud\Tea\Model;

class ListNotesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var notes
     */
    public $notes;
    protected $_name = [
        'requestId' => 'RequestId',
        'notes'     => 'Notes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->notes) {
            $res['Notes'] = null !== $this->notes ? $this->notes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNotesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Notes'])) {
            $model->notes = notes::fromMap($map['Notes']);
        }

        return $model;
    }
}
