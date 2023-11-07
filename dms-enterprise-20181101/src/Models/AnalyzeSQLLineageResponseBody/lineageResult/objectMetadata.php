<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AnalyzeSQLLineageResponseBody\lineageResult;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AnalyzeSQLLineageResponseBody\lineageResult\objectMetadata\fields;
use AlibabaCloud\Tea\Model;

class objectMetadata extends Model
{
    /**
     * @description The fields in the metatable.
     *
     * @var fields[]
     */
    public $fields;

    /**
     * @description The object name.
     *
     * @example a
     *
     * @var string
     */
    public $name;

    /**
     * @description The source of metadata. Valid values:
     *
     *   **DDL**: The metadata comes from parsed SQL statements or definition of databases and tables collected by DMS.
     *   **LINEAGE**: The metadata comes from lineage analysis results.
     *
     * @example DDL
     *
     * @var string
     */
    public $source;

    /**
     * @description The object type. Valid values:
     *
     *   **TABLE**
     *   **VIEW**
     *   **TMP_TABLE**
     *
     * @example TABLE
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'fields' => 'Fields',
        'name'   => 'Name',
        'source' => 'Source',
        'type'   => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fields) {
            $res['Fields'] = [];
            if (null !== $this->fields && \is_array($this->fields)) {
                $n = 0;
                foreach ($this->fields as $item) {
                    $res['Fields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return objectMetadata
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Fields'])) {
            if (!empty($map['Fields'])) {
                $model->fields = [];
                $n             = 0;
                foreach ($map['Fields'] as $item) {
                    $model->fields[$n++] = null !== $item ? fields::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
