<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAuthorizedDataServiceApiDetailsResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAuthorizedDataServiceApiDetailsResponseBody\result\data\authorizedDevReturnParameters;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAuthorizedDataServiceApiDetailsResponseBody\result\data\authorizedProdReturnParameters;

class data extends Model
{
    /**
     * @var int
     */
    public $apiId;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var int
     */
    public $appId;

    /**
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
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $devAuthPeriod;

    /**
     * @var string
     */
    public $prodAuthPeriod;

    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'apiId' => 'ApiId',
        'apiName' => 'ApiName',
        'appId' => 'AppId',
        'authType' => 'AuthType',
        'authorizedDevReturnParameters' => 'AuthorizedDevReturnParameters',
        'authorizedProdReturnParameters' => 'AuthorizedProdReturnParameters',
        'description' => 'Description',
        'devAuthPeriod' => 'DevAuthPeriod',
        'prodAuthPeriod' => 'ProdAuthPeriod',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
        if (\is_array($this->authorizedDevReturnParameters)) {
            Model::validateArray($this->authorizedDevReturnParameters);
        }
        if (\is_array($this->authorizedProdReturnParameters)) {
            Model::validateArray($this->authorizedProdReturnParameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->authorizedDevReturnParameters)) {
                $res['AuthorizedDevReturnParameters'] = [];
                $n1 = 0;
                foreach ($this->authorizedDevReturnParameters as $item1) {
                    $res['AuthorizedDevReturnParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->authorizedProdReturnParameters) {
            if (\is_array($this->authorizedProdReturnParameters)) {
                $res['AuthorizedProdReturnParameters'] = [];
                $n1 = 0;
                foreach ($this->authorizedProdReturnParameters as $item1) {
                    $res['AuthorizedProdReturnParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['AuthorizedDevReturnParameters'] as $item1) {
                    $model->authorizedDevReturnParameters[$n1] = authorizedDevReturnParameters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AuthorizedProdReturnParameters'])) {
            if (!empty($map['AuthorizedProdReturnParameters'])) {
                $model->authorizedProdReturnParameters = [];
                $n1 = 0;
                foreach ($map['AuthorizedProdReturnParameters'] as $item1) {
                    $model->authorizedProdReturnParameters[$n1] = authorizedProdReturnParameters::fromMap($item1);
                    ++$n1;
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
