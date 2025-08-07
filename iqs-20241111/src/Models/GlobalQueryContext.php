<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IQS\V20241111\Models\GlobalQueryContext\originalQuery;

class GlobalQueryContext extends Model
{
    /**
     * @var originalQuery
     */
    public $originalQuery;
    protected $_name = [
        'originalQuery' => 'originalQuery',
    ];

    public function validate()
    {
        if (null !== $this->originalQuery) {
            $this->originalQuery->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->originalQuery) {
            $res['originalQuery'] = null !== $this->originalQuery ? $this->originalQuery->toArray($noStream) : $this->originalQuery;
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
        if (isset($map['originalQuery'])) {
            $model->originalQuery = originalQuery::fromMap($map['originalQuery']);
        }

        return $model;
    }
}
