<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class GetAccountMockRuleRequest extends Model
{
    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $consumerAppName;

    /**
     * @var string
     */
    public $providerAppName;

    /**
     * @var string
     */
    public $namespace;
    protected $_name = [
        'region'          => 'Region',
        'pageSize'        => 'PageSize',
        'pageNumber'      => 'PageNumber',
        'name'            => 'Name',
        'consumerAppName' => 'ConsumerAppName',
        'providerAppName' => 'ProviderAppName',
        'namespace'       => 'Namespace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->consumerAppName) {
            $res['ConsumerAppName'] = $this->consumerAppName;
        }
        if (null !== $this->providerAppName) {
            $res['ProviderAppName'] = $this->providerAppName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccountMockRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ConsumerAppName'])) {
            $model->consumerAppName = $map['ConsumerAppName'];
        }
        if (isset($map['ProviderAppName'])) {
            $model->providerAppName = $map['ProviderAppName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}
