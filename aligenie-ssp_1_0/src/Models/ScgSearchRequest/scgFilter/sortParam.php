<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScgSearchRequest\scgFilter;

use AlibabaCloud\Tea\Model;

class sortParam extends Model
{
    /**
     * @example internal_id
     *
     * @var string
     */
    public $sortKey;

    /**
     * @example ASC
     *
     * @var string
     */
    public $sortOrder;

    /**
     * @example “”
     *
     * @var string
     */
    public $sortText;
    protected $_name = [
        'sortKey'   => 'SortKey',
        'sortOrder' => 'SortOrder',
        'sortText'  => 'SortText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sortKey) {
            $res['SortKey'] = $this->sortKey;
        }
        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }
        if (null !== $this->sortText) {
            $res['SortText'] = $this->sortText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sortParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SortKey'])) {
            $model->sortKey = $map['SortKey'];
        }
        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }
        if (isset($map['SortText'])) {
            $model->sortText = $map['SortText'];
        }

        return $model;
    }
}
