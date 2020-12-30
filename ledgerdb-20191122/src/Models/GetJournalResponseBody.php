<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ledgerdb\V20191122\Models;

use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\GetJournalResponseBody\journal;
use AlibabaCloud\Tea\Model;

class GetJournalResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var journal
     */
    public $journal;
    protected $_name = [
        'requestId' => 'RequestId',
        'journal'   => 'Journal',
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
        if (null !== $this->journal) {
            $res['Journal'] = null !== $this->journal ? $this->journal->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJournalResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Journal'])) {
            $model->journal = journal::fromMap($map['Journal']);
        }

        return $model;
    }
}
