<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceApiDocumentResponseBody\data;

use AlibabaCloud\Dara\Model;

class apiRegisterInfo extends Model
{
    /**
     * @var string
     */
    public $authType;

    /**
     * @var string
     */
    public $datasourceId;

    /**
     * @var string
     */
    public $datasourceName;

    /**
     * @var int
     */
    public $httpMethod;

    /**
     * @var int
     */
    public $mode;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'authType' => 'AuthType',
        'datasourceId' => 'DatasourceId',
        'datasourceName' => 'DatasourceName',
        'httpMethod' => 'HttpMethod',
        'mode' => 'Mode',
        'path' => 'Path',
        'protocol' => 'Protocol',
        'timeout' => 'Timeout',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }

        if (null !== $this->datasourceId) {
            $res['DatasourceId'] = $this->datasourceId;
        }

        if (null !== $this->datasourceName) {
            $res['DatasourceName'] = $this->datasourceName;
        }

        if (null !== $this->httpMethod) {
            $res['HttpMethod'] = $this->httpMethod;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }

        if (isset($map['DatasourceId'])) {
            $model->datasourceId = $map['DatasourceId'];
        }

        if (isset($map['DatasourceName'])) {
            $model->datasourceName = $map['DatasourceName'];
        }

        if (isset($map['HttpMethod'])) {
            $model->httpMethod = $map['HttpMethod'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
