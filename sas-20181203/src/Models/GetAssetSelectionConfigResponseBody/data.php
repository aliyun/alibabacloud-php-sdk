<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAssetSelectionConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the current asset selection. It can be used to query and modify the asset that is selected.
     *
     * @example 657c8411-4e89-446c-ab66-d45d1331****
     *
     * @var string
     */
    public $selectionKey;

    /**
     * @description The dimension based on which the asset is selected. Valid values:
     *
     *   **instance**: The asset is selected by server.
     *   **group**: The asset is selected by group.
     *   **vpc**: The asset is selected by VPC.
     *
     * @example instance
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'selectionKey' => 'SelectionKey',
        'targetType'   => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->selectionKey) {
            $res['SelectionKey'] = $this->selectionKey;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
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
        if (isset($map['SelectionKey'])) {
            $model->selectionKey = $map['SelectionKey'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
