<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class QueryAlertRulesInput extends Model
{
    /**
     * @var QueryAlertRulesFilter
     */
    public $filter;

    /**
     * @var Pagination
     */
    public $pagination;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'filter' => 'filter',
        'pagination' => 'pagination',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (null !== $this->filter) {
            $this->filter->validate();
        }
        if (null !== $this->pagination) {
            $this->pagination->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filter) {
            $res['filter'] = null !== $this->filter ? $this->filter->toArray($noStream) : $this->filter;
        }

        if (null !== $this->pagination) {
            $res['pagination'] = null !== $this->pagination ? $this->pagination->toArray($noStream) : $this->pagination;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['filter'])) {
            $model->filter = QueryAlertRulesFilter::fromMap($map['filter']);
        }

        if (isset($map['pagination'])) {
            $model->pagination = Pagination::fromMap($map['pagination']);
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
