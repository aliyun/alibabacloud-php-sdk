<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListWafTemplateRulesRequest;

use AlibabaCloud\Tea\Model;

class queryArgs extends Model
{
    /**
     * @example http_directory_traversal
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'type' => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queryArgs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
