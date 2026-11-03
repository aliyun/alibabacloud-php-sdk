<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class SearchPolarClawSkillsRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var bool
     */
    public $exact;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'exact' => 'Exact',
        'limit' => 'Limit',
        'query' => 'Query',
        'source' => 'Source',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->exact) {
            $res['Exact'] = $this->exact;
        }

        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['Exact'])) {
            $model->exact = $map['Exact'];
        }

        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
