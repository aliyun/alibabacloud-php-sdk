<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models\DescribeHistoryApiResponseBody\pathParameters;

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

    /**
     * @var string
     */
    public $serviceParameterName;
    protected $_name = [
        'apiParameterName'     => 'ApiParameterName',
        'demoValue'            => 'DemoValue',
        'description'          => 'Description',
        'serviceParameterName' => 'ServiceParameterName',
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
        if (null !== $this->serviceParameterName) {
            $res['ServiceParameterName'] = $this->serviceParameterName;
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
        if (isset($map['ServiceParameterName'])) {
            $model->serviceParameterName = $map['ServiceParameterName'];
        }

        return $model;
    }
}
