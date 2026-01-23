<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class GetStandardShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var string
     */
    public $standardGetQueryShrink;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'standardGetQueryShrink' => 'StandardGetQuery',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->standardGetQueryShrink) {
            $res['StandardGetQuery'] = $this->standardGetQueryShrink;
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
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['StandardGetQuery'])) {
            $model->standardGetQueryShrink = $map['StandardGetQuery'];
        }

        return $model;
    }
}
