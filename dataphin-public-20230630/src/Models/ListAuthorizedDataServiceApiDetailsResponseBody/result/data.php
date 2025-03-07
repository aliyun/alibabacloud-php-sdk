<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAuthorizedDataServiceApiDetailsResponseBody\result;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAuthorizedDataServiceApiDetailsResponseBody\result\data\authorizedDevReturnParameters;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAuthorizedDataServiceApiDetailsResponseBody\result\data\authorizedProdReturnParameters;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description API_ID
     *
     * @example 12345
     *
     * @var int
     */
    public $apiId;

    /**
     * @example GetData
     *
     * @var string
     */
    public $apiName;

    /**
     * @example 12345
     *
     * @var int
     */
    public $appId;

    /**
     * @example 使用权限
     *
     * @var string
     */
    public $authType;

    /**
     * @var authorizedDevReturnParameters[]
     */
    public $authorizedDevReturnParameters;

    /**
     * @var authorizedProdReturnParameters[]
     */
    public $authorizedProdReturnParameters;

    /**
     * @example Description1
     *
     * @var string
     */
    public $description;

    /**
     * @example 2035-12-31
     *
     * @var string
     */
    public $devAuthPeriod;

    /**
     * @example 2035-12-31
     *
     * @var string
     */
    public $prodAuthPeriod;

    /**
     * @example 10000
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'apiId'                          => 'ApiId',
        'apiName'                        => 'ApiName',
        'appId'                          => 'AppId',
        'authType'                       => 'AuthType',
        'authorizedDevReturnParameters'  => 'AuthorizedDevReturnParameters',
        'authorizedProdReturnParameters' => 'AuthorizedProdReturnParameters',
        'description'                    => 'Description',
        'devAuthPeriod'                  => 'DevAuthPeriod',
        'prodAuthPeriod'                 => 'ProdAuthPeriod',
        'projectId'                      => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->authorizedDevReturnParameters) {
            $res['AuthorizedDevReturnParameters'] = [];
            if (null !== $this->authorizedDevReturnParameters && \is_array($this->authorizedDevReturnParameters)) {
                $n = 0;
                foreach ($this->authorizedDevReturnParameters as $item) {
                    $res['AuthorizedDevReturnParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->authorizedProdReturnParameters) {
            $res['AuthorizedProdReturnParameters'] = [];
            if (null !== $this->authorizedProdReturnParameters && \is_array($this->authorizedProdReturnParameters)) {
                $n = 0;
                foreach ($this->authorizedProdReturnParameters as $item) {
                    $res['AuthorizedProdReturnParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->devAuthPeriod) {
            $res['DevAuthPeriod'] = $this->devAuthPeriod;
        }
        if (null !== $this->prodAuthPeriod) {
            $res['ProdAuthPeriod'] = $this->prodAuthPeriod;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['AuthorizedDevReturnParameters'])) {
            if (!empty($map['AuthorizedDevReturnParameters'])) {
                $model->authorizedDevReturnParameters = [];
                $n                                    = 0;
                foreach ($map['AuthorizedDevReturnParameters'] as $item) {
                    $model->authorizedDevReturnParameters[$n++] = null !== $item ? authorizedDevReturnParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AuthorizedProdReturnParameters'])) {
            if (!empty($map['AuthorizedProdReturnParameters'])) {
                $model->authorizedProdReturnParameters = [];
                $n                                     = 0;
                foreach ($map['AuthorizedProdReturnParameters'] as $item) {
                    $model->authorizedProdReturnParameters[$n++] = null !== $item ? authorizedProdReturnParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DevAuthPeriod'])) {
            $model->devAuthPeriod = $map['DevAuthPeriod'];
        }
        if (isset($map['ProdAuthPeriod'])) {
            $model->prodAuthPeriod = $map['ProdAuthPeriod'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
