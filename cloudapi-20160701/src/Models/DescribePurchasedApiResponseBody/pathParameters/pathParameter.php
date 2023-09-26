<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models\DescribePurchasedApiResponseBody\pathParameters;

use AlibabaCloud\Tea\Model;

class pathParameter extends Model
{
    /**
     * @var string
     */
    public $apiParameterName;

    /**
     * @var string
     */
    public $demoValue;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'apiParameterName' => 'ApiParameterName',
        'demoValue'        => 'DemoValue',
        'description'      => 'Description',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiParameterName) {
            $res['ApiParameterName'] = $this->apiParameterName;
        }
        if (null !== $this->demoValue) {
            $res['DemoValue'] = $this->demoValue;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pathParameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiParameterName'])) {
            $model->apiParameterName = $map['ApiParameterName'];
        }
        if (isset($map['DemoValue'])) {
            $model->demoValue = $map['DemoValue'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
