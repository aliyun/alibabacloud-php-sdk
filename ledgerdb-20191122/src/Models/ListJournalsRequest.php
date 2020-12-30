<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ledgerdb\V20191122\Models;

use AlibabaCloud\Tea\Model;

class ListJournalsRequest extends Model
{
    /**
     * @var string
     */
    public $ledgerId;

    /**
     * @var string
     */
    public $clue;

    /**
     * @var string
     */
    public $memberId;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var bool
     */
    public $reverse;
    protected $_name = [
        'ledgerId'   => 'LedgerId',
        'clue'       => 'Clue',
        'memberId'   => 'MemberId',
        'nextToken'  => 'NextToken',
        'maxResults' => 'MaxResults',
        'reverse'    => 'Reverse',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ledgerId) {
            $res['LedgerId'] = $this->ledgerId;
        }
        if (null !== $this->clue) {
            $res['Clue'] = $this->clue;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->reverse) {
            $res['Reverse'] = $this->reverse;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListJournalsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LedgerId'])) {
            $model->ledgerId = $map['LedgerId'];
        }
        if (isset($map['Clue'])) {
            $model->clue = $map['Clue'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Reverse'])) {
            $model->reverse = $map['Reverse'];
        }

        return $model;
    }
}
