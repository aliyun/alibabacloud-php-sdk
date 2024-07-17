<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class GetAdvanceConfigRequest extends Model
{
    /**
     * @description *   The type of the advanced configuration. Valid values: -ONLINE: online configuration
     *   \\-ONLINE_CAVA: online Cava configuration
     *   \\-ONLINE_PLUGIN: online plug-in configuration
     *   \\-ONLINE_QUERY: query configuration
     *   \\-OFFLINE_DICT: offline dictionary configuration
     *   \\-OFFLINE_TABLE: offline table configuration
     *   \\-OFFLINE_COMMON: offline configuration
     *   \\-OFFLINE_PLUGIN: offline plug-in configuration
     *   \\-OFFLINE_INDEX: index configuration
     *
     * @example ONLINE
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'type' => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAdvanceConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
