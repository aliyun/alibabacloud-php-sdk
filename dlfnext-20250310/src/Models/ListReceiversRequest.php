<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class ListReceiversRequest extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $pageToken;

    /**
     * @var string
     */
    public $receiverName;
    protected $_name = [
        'maxResults' => 'maxResults',
        'pageToken' => 'pageToken',
        'receiverName' => 'receiverName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->pageToken) {
            $res['pageToken'] = $this->pageToken;
        }

        if (null !== $this->receiverName) {
            $res['receiverName'] = $this->receiverName;
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
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['pageToken'])) {
            $model->pageToken = $map['pageToken'];
        }

        if (isset($map['receiverName'])) {
            $model->receiverName = $map['receiverName'];
        }

        return $model;
    }
}
