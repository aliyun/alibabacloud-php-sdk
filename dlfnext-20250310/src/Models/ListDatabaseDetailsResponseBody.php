<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class ListDatabaseDetailsResponseBody extends Model
{
    /**
     * @var Database[]
     */
    public $databaseDetails;

    /**
     * @example E8ABEB1C3DB893D16576269017992F57
     *
     * @var string
     */
    public $nextPageToken;
    protected $_name = [
        'databaseDetails' => 'databaseDetails',
        'nextPageToken' => 'nextPageToken',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseDetails) {
            $res['databaseDetails'] = [];
            if (null !== $this->databaseDetails && \is_array($this->databaseDetails)) {
                $n = 0;
                foreach ($this->databaseDetails as $item) {
                    $res['databaseDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextPageToken) {
            $res['nextPageToken'] = $this->nextPageToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDatabaseDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['databaseDetails'])) {
            if (!empty($map['databaseDetails'])) {
                $model->databaseDetails = [];
                $n = 0;
                foreach ($map['databaseDetails'] as $item) {
                    $model->databaseDetails[$n++] = null !== $item ? Database::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['nextPageToken'])) {
            $model->nextPageToken = $map['nextPageToken'];
        }

        return $model;
    }
}
