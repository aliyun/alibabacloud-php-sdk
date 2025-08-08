<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class ListIcebergNamespaceDetailsResponseBody extends Model
{
    /**
     * @var Namespace_[]
     */
    public $namespaceDetails;

    /**
     * @var string
     */
    public $nextPageToken;
    protected $_name = [
        'namespaceDetails' => 'namespaceDetails',
        'nextPageToken' => 'nextPageToken',
    ];

    public function validate()
    {
        if (\is_array($this->namespaceDetails)) {
            Model::validateArray($this->namespaceDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->namespaceDetails) {
            if (\is_array($this->namespaceDetails)) {
                $res['namespaceDetails'] = [];
                $n1 = 0;
                foreach ($this->namespaceDetails as $item1) {
                    $res['namespaceDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextPageToken) {
            $res['nextPageToken'] = $this->nextPageToken;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['namespaceDetails'])) {
            if (!empty($map['namespaceDetails'])) {
                $model->namespaceDetails = [];
                $n1 = 0;
                foreach ($map['namespaceDetails'] as $item1) {
                    $model->namespaceDetails[$n1] = Namespace_::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['nextPageToken'])) {
            $model->nextPageToken = $map['nextPageToken'];
        }

        return $model;
    }
}
