<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class ListTableDetailsRequest extends Model
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
    public $tableNamePattern;
    protected $_name = [
        'maxResults' => 'maxResults',
        'pageToken' => 'pageToken',
        'tableNamePattern' => 'tableNamePattern',
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

        if (null !== $this->tableNamePattern) {
            $res['tableNamePattern'] = $this->tableNamePattern;
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

        if (isset($map['tableNamePattern'])) {
            $model->tableNamePattern = $map['tableNamePattern'];
        }

        return $model;
    }
}
