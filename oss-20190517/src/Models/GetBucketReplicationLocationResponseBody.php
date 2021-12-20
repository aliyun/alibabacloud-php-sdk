<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketReplicationLocationResponseBody\locationTransferTypeConstraint;
use AlibabaCloud\Tea\Model;

class GetBucketReplicationLocationResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $locations;

    /**
     * @var locationTransferTypeConstraint
     */
    public $locationTransferTypeConstraint;
    protected $_name = [
        'locations'                      => 'Location',
        'locationTransferTypeConstraint' => 'LocationTransferTypeConstraint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->locations) {
            $res['Location'] = $this->locations;
        }
        if (null !== $this->locationTransferTypeConstraint) {
            $res['LocationTransferTypeConstraint'] = null !== $this->locationTransferTypeConstraint ? $this->locationTransferTypeConstraint->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBucketReplicationLocationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Location'])) {
            if (!empty($map['Location'])) {
                $model->locations = $map['Location'];
            }
        }
        if (isset($map['LocationTransferTypeConstraint'])) {
            $model->locationTransferTypeConstraint = locationTransferTypeConstraint::fromMap($map['LocationTransferTypeConstraint']);
        }

        return $model;
    }
}
