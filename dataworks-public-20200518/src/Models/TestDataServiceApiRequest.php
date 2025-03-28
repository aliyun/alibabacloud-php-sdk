<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TestDataServiceApiRequest\bodyParams;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TestDataServiceApiRequest\headParams;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TestDataServiceApiRequest\pathParams;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TestDataServiceApiRequest\queryParam;

class TestDataServiceApiRequest extends Model
{
    /**
     * @var int
     */
    public $apiId;

    /**
     * @var string
     */
    public $bodyContent;

    /**
     * @var bodyParams[]
     */
    public $bodyParams;

    /**
     * @var headParams[]
     */
    public $headParams;

    /**
     * @var pathParams[]
     */
    public $pathParams;

    /**
     * @var queryParam[]
     */
    public $queryParam;
    protected $_name = [
        'apiId' => 'ApiId',
        'bodyContent' => 'BodyContent',
        'bodyParams' => 'BodyParams',
        'headParams' => 'HeadParams',
        'pathParams' => 'PathParams',
        'queryParam' => 'QueryParam',
    ];

    public function validate()
    {
        if (\is_array($this->bodyParams)) {
            Model::validateArray($this->bodyParams);
        }
        if (\is_array($this->headParams)) {
            Model::validateArray($this->headParams);
        }
        if (\is_array($this->pathParams)) {
            Model::validateArray($this->pathParams);
        }
        if (\is_array($this->queryParam)) {
            Model::validateArray($this->queryParam);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }

        if (null !== $this->bodyContent) {
            $res['BodyContent'] = $this->bodyContent;
        }

        if (null !== $this->bodyParams) {
            if (\is_array($this->bodyParams)) {
                $res['BodyParams'] = [];
                $n1 = 0;
                foreach ($this->bodyParams as $item1) {
                    $res['BodyParams'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->headParams) {
            if (\is_array($this->headParams)) {
                $res['HeadParams'] = [];
                $n1 = 0;
                foreach ($this->headParams as $item1) {
                    $res['HeadParams'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pathParams) {
            if (\is_array($this->pathParams)) {
                $res['PathParams'] = [];
                $n1 = 0;
                foreach ($this->pathParams as $item1) {
                    $res['PathParams'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->queryParam) {
            if (\is_array($this->queryParam)) {
                $res['QueryParam'] = [];
                $n1 = 0;
                foreach ($this->queryParam as $item1) {
                    $res['QueryParam'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (isset($map['BodyContent'])) {
            $model->bodyContent = $map['BodyContent'];
        }

        if (isset($map['BodyParams'])) {
            if (!empty($map['BodyParams'])) {
                $model->bodyParams = [];
                $n1 = 0;
                foreach ($map['BodyParams'] as $item1) {
                    $model->bodyParams[$n1++] = bodyParams::fromMap($item1);
                }
            }
        }

        if (isset($map['HeadParams'])) {
            if (!empty($map['HeadParams'])) {
                $model->headParams = [];
                $n1 = 0;
                foreach ($map['HeadParams'] as $item1) {
                    $model->headParams[$n1++] = headParams::fromMap($item1);
                }
            }
        }

        if (isset($map['PathParams'])) {
            if (!empty($map['PathParams'])) {
                $model->pathParams = [];
                $n1 = 0;
                foreach ($map['PathParams'] as $item1) {
                    $model->pathParams[$n1++] = pathParams::fromMap($item1);
                }
            }
        }

        if (isset($map['QueryParam'])) {
            if (!empty($map['QueryParam'])) {
                $model->queryParam = [];
                $n1 = 0;
                foreach ($map['QueryParam'] as $item1) {
                    $model->queryParam[$n1++] = queryParam::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
