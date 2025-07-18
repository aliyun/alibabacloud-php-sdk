<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\UpsertChunksRequest;

use AlibabaCloud\Tea\Model;

class textChunks extends Model
{
    /**
     * @description Document content.
     *
     * This parameter is required.
     *
     * @example Cloud-native data warehouse AnalyticDB PostgreSQL Edition provides a simple, fast, and cost-effective PB-level cloud data warehouse solution.
     *
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $filter;

    /**
     * @var string
     */
    public $id;

    /**
     * @description Metadata.
     *
     * @example {"title":"test"}
     *
     * @var mixed[]
     */
    public $metadata;
    protected $_name = [
        'content' => 'Content',
        'filter' => 'Filter',
        'id' => 'Id',
        'metadata' => 'Metadata',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return textChunks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }

        return $model;
    }
}
