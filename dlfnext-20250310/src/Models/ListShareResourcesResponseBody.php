<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class ListShareResourcesResponseBody extends Model
{
    /**
     * @var string
     */
    public $catalogId;

    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var ShareResource[]
     */
    public $shareResources;
    protected $_name = [
        'catalogId' => 'catalogId',
        'nextPageToken' => 'nextPageToken',
        'shareResources' => 'shareResources',
    ];

    public function validate()
    {
        if (\is_array($this->shareResources)) {
            Model::validateArray($this->shareResources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogId) {
            $res['catalogId'] = $this->catalogId;
        }

        if (null !== $this->nextPageToken) {
            $res['nextPageToken'] = $this->nextPageToken;
        }

        if (null !== $this->shareResources) {
            if (\is_array($this->shareResources)) {
                $res['shareResources'] = [];
                $n1 = 0;
                foreach ($this->shareResources as $item1) {
                    $res['shareResources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['catalogId'])) {
            $model->catalogId = $map['catalogId'];
        }

        if (isset($map['nextPageToken'])) {
            $model->nextPageToken = $map['nextPageToken'];
        }

        if (isset($map['shareResources'])) {
            if (!empty($map['shareResources'])) {
                $model->shareResources = [];
                $n1 = 0;
                foreach ($map['shareResources'] as $item1) {
                    $model->shareResources[$n1] = ShareResource::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
