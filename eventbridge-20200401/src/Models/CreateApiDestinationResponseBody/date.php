<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateApiDestinationResponseBody;

use AlibabaCloud\Tea\Model;

class date extends Model
{
    /**
     * @description The name of the API destination.
     *
     * @example ApiDestinationName
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
     * @return date
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
