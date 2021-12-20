<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketReplicationLocationResponseBody;

use AlibabaCloud\SDK\Oss\V20190517\Models\LocationTransferType;
use AlibabaCloud\Tea\Model;

class locationTransferTypeConstraint extends Model
{
    /**
     * @var LocationTransferType[]
     */
    public $locationTransferTypes;
    protected $_name = [
        'locationTransferTypes' => 'LocationTransferType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->locationTransferTypes) {
            $res['LocationTransferType'] = [];
            if (null !== $this->locationTransferTypes && \is_array($this->locationTransferTypes)) {
                $n = 0;
                foreach ($this->locationTransferTypes as $item) {
                    $res['LocationTransferType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return locationTransferTypeConstraint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocationTransferType'])) {
            if (!empty($map['LocationTransferType'])) {
                $model->locationTransferTypes = [];
                $n                            = 0;
                foreach ($map['LocationTransferType'] as $item) {
                    $model->locationTransferTypes[$n++] = null !== $item ? LocationTransferType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
