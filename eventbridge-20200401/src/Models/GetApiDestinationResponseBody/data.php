<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetApiDestinationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetApiDestinationResponseBody\data\httpApiParameters;

class data extends Model
{
    /**
     * @var string
     */
    public $apiDestinationName;
    /**
     * @var string
     */
    public $connectionName;
    /**
     * @var string
     */
    public $description;
    /**
     * @var int
     */
    public $gmtCreate;
    /**
     * @var httpApiParameters
     */
    public $httpApiParameters;
    protected $_name = [
        'apiDestinationName' => 'ApiDestinationName',
        'connectionName'     => 'ConnectionName',
        'description'        => 'Description',
        'gmtCreate'          => 'GmtCreate',
        'httpApiParameters'  => 'HttpApiParameters',
    ];

    public function validate()
    {
        if (null !== $this->httpApiParameters) {
            $this->httpApiParameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiDestinationName) {
            $res['ApiDestinationName'] = $this->apiDestinationName;
        }

        if (null !== $this->connectionName) {
            $res['ConnectionName'] = $this->connectionName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->httpApiParameters) {
            $res['HttpApiParameters'] = null !== $this->httpApiParameters ? $this->httpApiParameters->toArray($noStream) : $this->httpApiParameters;
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
        if (isset($map['ApiDestinationName'])) {
            $model->apiDestinationName = $map['ApiDestinationName'];
        }

        if (isset($map['ConnectionName'])) {
            $model->connectionName = $map['ConnectionName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['HttpApiParameters'])) {
            $model->httpApiParameters = httpApiParameters::fromMap($map['HttpApiParameters']);
        }

        return $model;
    }
}
