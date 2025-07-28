<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class ListDatabaseDetailsRequest extends Model
{
    /**
     * @var string
     */
    public $databaseNamePattern;

    /**
     * @example 1000
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example ""
     *
     * @var string
     */
    public $pageToken;
    protected $_name = [
        'databaseNamePattern' => 'databaseNamePattern',
        'maxResults' => 'maxResults',
        'pageToken' => 'pageToken',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ListDatabaseDetailsRequest
     */
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
