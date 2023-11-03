<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateSelectionKeyByTypeRequest extends Model
{
    /**
     * @example VIRUS_SCAN_CYCLE_CONFIG
     *
     * @var string
     */
    public $businessType;

    /**
     * @example 614d179e-4776-4939-a04a-d842ce64****
     *
     * @var string
     */
    public $selectionKey;
    protected $_name = [
        'businessType' => 'BusinessType',
        'selectionKey' => 'SelectionKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->selectionKey) {
            $res['SelectionKey'] = $this->selectionKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSelectionKeyByTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['SelectionKey'])) {
            $model->selectionKey = $map['SelectionKey'];
        }

        return $model;
    }
}
