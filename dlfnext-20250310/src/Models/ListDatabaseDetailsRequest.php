<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class ListDatabaseDetailsRequest extends Model
{
    /**
     * @var string
     */
    public $databaseNamePattern;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $pageToken;
    protected $_name = [
        'databaseNamePattern' => 'databaseNamePattern',
        'maxResults' => 'maxResults',
        'pageToken' => 'pageToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databaseNamePattern) {
            $res['databaseNamePattern'] = $this->databaseNamePattern;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->pageToken) {
            $res['pageToken'] = $this->pageToken;
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
        if (isset($map['databaseNamePattern'])) {
            $model->databaseNamePattern = $map['databaseNamePattern'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['pageToken'])) {
            $model->pageToken = $map['pageToken'];
        }

        return $model;
    }
}
