<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class DeleteUmodelDataRequest extends Model
{
    /**
     * @example apm
     *
     * @var string
     */
    public $domain;

    /**
     * @example metric_set
     *
     * @var string
     */
    public $kind;

    /**
     * @example test
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'domain' => 'domain',
        'kind' => 'kind',
        'name' => 'name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }
        if (null !== $this->kind) {
            $res['kind'] = $this->kind;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteUmodelDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }
        if (isset($map['kind'])) {
            $model->kind = $map['kind'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
