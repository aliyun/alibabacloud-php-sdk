<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models;

use AlibabaCloud\Tea\Model;

class GetDocumentRankRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $docs;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $query;
    protected $_name = [
        'docs'  => 'docs',
        'query' => 'query',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docs) {
            $res['docs'] = $this->docs;
        }
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDocumentRankRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['docs'])) {
            if (!empty($map['docs'])) {
                $model->docs = $map['docs'];
            }
        }
        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        return $model;
    }
}
