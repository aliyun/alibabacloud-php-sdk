<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ReplicationDestination extends Model
{
    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $transferType;
    protected $_name = [
        'bucket'       => 'Bucket',
        'location'     => 'Location',
        'transferType' => 'TransferType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->transferType) {
            $res['TransferType'] = $this->transferType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReplicationDestination
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['TransferType'])) {
            $model->transferType = $map['TransferType'];
        }

        return $model;
    }
}
