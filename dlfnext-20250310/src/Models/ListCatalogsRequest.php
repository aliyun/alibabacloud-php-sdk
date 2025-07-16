<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class ListCatalogsRequest extends Model
{
    /**
     * @var string
     */
    public $catalogNamePattern;

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
        'catalogNamePattern' => 'catalogNamePattern',
        'maxResults' => 'maxResults',
        'pageToken' => 'pageToken',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ListCatalogsRequest
     */
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
