<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListAssetSelectionSelectedTargetRequest extends Model
{
    /**
     * @example 2e6ab33d-4e00-4581-ac16-0dd1f9ad****
     *
     * @var string
     */
    public $selectionKey;

    /**
     * @var string[]
     */
    public $targetList;
    protected $_name = [
        'selectionKey' => 'SelectionKey',
        'targetList'   => 'TargetList',
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
        if (null !== $this->targetList) {
            $res['TargetList'] = $this->targetList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAssetSelectionSelectedTargetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SelectionKey'])) {
            $model->selectionKey = $map['SelectionKey'];
        }
        if (isset($map['TargetList'])) {
            if (!empty($map['TargetList'])) {
                $model->targetList = $map['TargetList'];
            }
        }

        return $model;
    }
}
