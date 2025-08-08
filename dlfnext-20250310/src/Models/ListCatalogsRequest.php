<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class ListCatalogsRequest extends Model
{
    /**
     * @var string
     */
    public $catalogNamePattern;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $pageToken;
    protected $_name = [
        'catalogNamePattern' => 'catalogNamePattern',
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
        if (null !== $this->catalogNamePattern) {
            $res['catalogNamePattern'] = $this->catalogNamePattern;
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
        if (isset($map['catalogNamePattern'])) {
            $model->catalogNamePattern = $map['catalogNamePattern'];
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
