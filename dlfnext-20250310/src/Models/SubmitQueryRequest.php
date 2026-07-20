<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class SubmitQueryRequest extends Model
{
    /**
     * @var string
     */
    public $defaultCatalog;

    /**
     * @var string
     */
    public $defaultDatabase;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $sql;

    /**
     * @var string
     */
    public $tier;
    protected $_name = [
        'defaultCatalog' => 'defaultCatalog',
        'defaultDatabase' => 'defaultDatabase',
        'limit' => 'limit',
        'sql' => 'sql',
        'tier' => 'tier',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultCatalog) {
            $res['defaultCatalog'] = $this->defaultCatalog;
        }

        if (null !== $this->defaultDatabase) {
            $res['defaultDatabase'] = $this->defaultDatabase;
        }

        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }

        if (null !== $this->sql) {
            $res['sql'] = $this->sql;
        }

        if (null !== $this->tier) {
            $res['tier'] = $this->tier;
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
        if (isset($map['defaultCatalog'])) {
            $model->defaultCatalog = $map['defaultCatalog'];
        }

        if (isset($map['defaultDatabase'])) {
            $model->defaultDatabase = $map['defaultDatabase'];
        }

        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }

        if (isset($map['sql'])) {
            $model->sql = $map['sql'];
        }

        if (isset($map['tier'])) {
            $model->tier = $map['tier'];
        }

        return $model;
    }
}
