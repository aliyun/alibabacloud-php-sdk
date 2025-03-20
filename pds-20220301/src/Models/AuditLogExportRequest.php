<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class AuditLogExportRequest extends Model
{
    /**
     * @example 2024-01-log.csv
     *
     * @var string
     */
    public $fileName;

    /**
     * @example zh_CN
     *
     * @var string
     */
    public $language;

    /**
     * @example acted_at DESC
     *
     * @var string
     */
    public $orderBy;

    /**
     * @example acted_at > \\"2025-03-10T16:00:00\\" and acted_at < \\"2025-03-17T15:59:59\\"
     *
     * @var string
     */
    public $query;
    protected $_name = [
        'fileName' => 'file_name',
        'language' => 'language',
        'orderBy' => 'order_by',
        'query' => 'query',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['file_name'] = $this->fileName;
        }
        if (null !== $this->language) {
            $res['language'] = $this->language;
        }
        if (null !== $this->orderBy) {
            $res['order_by'] = $this->orderBy;
        }
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuditLogExportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['file_name'])) {
            $model->fileName = $map['file_name'];
        }
        if (isset($map['language'])) {
            $model->language = $map['language'];
        }
        if (isset($map['order_by'])) {
            $model->orderBy = $map['order_by'];
        }
        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        return $model;
    }
}
