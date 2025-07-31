<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class ListIcebergNamespaceDetailsResponseBody extends Model
{
    /**
     * @var Namespace_[]
     */
    public $namespaceDetails;

    /**
     * @example ""
     *
     * @var string
     */
    public $nextPageToken;
    protected $_name = [
        'namespaceDetails' => 'namespaceDetails',
        'nextPageToken' => 'nextPageToken',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespaceDetails) {
            $res['namespaceDetails'] = [];
            if (null !== $this->namespaceDetails && \is_array($this->namespaceDetails)) {
                $n = 0;
                foreach ($this->namespaceDetails as $item) {
                    $res['namespaceDetails'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListIcebergNamespaceDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['namespaceDetails'])) {
            if (!empty($map['namespaceDetails'])) {
                $model->namespaceDetails = [];
                $n = 0;
                foreach ($map['namespaceDetails'] as $item) {
                    $model->namespaceDetails[$n++] = null !== $item ? Namespace_::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['nextPageToken'])) {
            $model->nextPageToken = $map['nextPageToken'];
        }

        return $model;
    }
}
