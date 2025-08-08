<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class ListIcebergNamespaceDetailsRequest extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $namespaceNamePattern;

    /**
     * @var string
     */
    public $pageToken;
    protected $_name = [
        'maxResults' => 'maxResults',
        'namespaceNamePattern' => 'namespaceNamePattern',
        'pageToken' => 'pageToken',
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

        if (null !== $this->namespaceNamePattern) {
            $res['namespaceNamePattern'] = $this->namespaceNamePattern;
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
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['namespaceNamePattern'])) {
            $model->namespaceNamePattern = $map['namespaceNamePattern'];
        }

        if (isset($map['pageToken'])) {
            $model->pageToken = $map['pageToken'];
        }

        return $model;
    }
}
