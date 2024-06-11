<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Beian\V20160810\Models;

use AlibabaCloud\Tea\Model;

class ManageAccessorDomainRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $caller;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $domain;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $operation;
    protected $_name = [
        'caller'    => 'Caller',
        'domain'    => 'Domain',
        'operation' => 'Operation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ManageAccessorDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        return $model;
    }
}
