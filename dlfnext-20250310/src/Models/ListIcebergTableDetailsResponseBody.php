<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class ListIcebergTableDetailsResponseBody extends Model
{
    /**
     * @example ""
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @var IcebergTable[]
     */
    public $tableDetails;
    protected $_name = [
        'nextPageToken' => 'nextPageToken',
        'tableDetails' => 'tableDetails',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextPageToken) {
            $res['nextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->tableDetails) {
            $res['tableDetails'] = [];
            if (null !== $this->tableDetails && \is_array($this->tableDetails)) {
                $n = 0;
                foreach ($this->tableDetails as $item) {
                    $res['tableDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIcebergTableDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nextPageToken'])) {
            $model->nextPageToken = $map['nextPageToken'];
        }
        if (isset($map['tableDetails'])) {
            if (!empty($map['tableDetails'])) {
                $model->tableDetails = [];
                $n = 0;
                foreach ($map['tableDetails'] as $item) {
                    $model->tableDetails[$n++] = null !== $item ? IcebergTable::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
