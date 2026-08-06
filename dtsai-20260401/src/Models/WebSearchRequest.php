<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DtsAI\V20260401\Models;

use AlibabaCloud\Dara\Model;

class WebSearchRequest extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $urlScopeDomains;

    /**
     * @var string
     */
    public $urlScopeMode;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'query' => 'Query',
        'regionId' => 'RegionId',
        'urlScopeDomains' => 'UrlScopeDomains',
        'urlScopeMode' => 'UrlScopeMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->urlScopeDomains) {
            $res['UrlScopeDomains'] = $this->urlScopeDomains;
        }

        if (null !== $this->urlScopeMode) {
            $res['UrlScopeMode'] = $this->urlScopeMode;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['UrlScopeDomains'])) {
            $model->urlScopeDomains = $map['UrlScopeDomains'];
        }

        if (isset($map['UrlScopeMode'])) {
            $model->urlScopeMode = $map['UrlScopeMode'];
        }

        return $model;
    }
}
