<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class GetApiDestinationRequest extends Model
{
    /**
     * @description The name of the API destination.
     *
     * This parameter is required.
     * @example api-destination-name
     *
     * @var string
     */
    public $apiDestinationName;
    protected $_name = [
        'apiDestinationName' => 'ApiDestinationName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiDestinationName) {
            $res['ApiDestinationName'] = $this->apiDestinationName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetApiDestinationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiDestinationName'])) {
            $model->apiDestinationName = $map['ApiDestinationName'];
        }

        return $model;
    }
}
