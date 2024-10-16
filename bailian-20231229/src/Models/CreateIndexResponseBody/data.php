<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\CreateIndexResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The primary key ID of the knowledge base, `IndexId`.
     *
     * >  We recommend that you store this ID. It is required for all subsequent API operations related to this knowledge base.
     * @example jkurxhju6b
     *
     * @var string
     */
    public $id;
    protected $_name = [
        'id' => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
