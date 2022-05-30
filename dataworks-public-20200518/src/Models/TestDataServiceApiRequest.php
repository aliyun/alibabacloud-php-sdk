<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TestDataServiceApiRequest\bodyParams;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TestDataServiceApiRequest\headParams;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TestDataServiceApiRequest\pathParams;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TestDataServiceApiRequest\queryParam;
use AlibabaCloud\Tea\Model;

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
        'apiId'       => 'ApiId',
        'bodyContent' => 'BodyContent',
        'bodyParams'  => 'BodyParams',
        'headParams'  => 'HeadParams',
        'pathParams'  => 'PathParams',
        'queryParam'  => 'QueryParam',
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
        if (null !== $this->bodyContent) {
            $res['BodyContent'] = $this->bodyContent;
        }
        if (null !== $this->bodyParams) {
            $res['BodyParams'] = [];
            if (null !== $this->bodyParams && \is_array($this->bodyParams)) {
                $n = 0;
                foreach ($this->bodyParams as $item) {
                    $res['BodyParams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->headParams) {
            $res['HeadParams'] = [];
            if (null !== $this->headParams && \is_array($this->headParams)) {
                $n = 0;
                foreach ($this->headParams as $item) {
                    $res['HeadParams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pathParams) {
            $res['PathParams'] = [];
            if (null !== $this->pathParams && \is_array($this->pathParams)) {
                $n = 0;
                foreach ($this->pathParams as $item) {
                    $res['PathParams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->queryParam) {
            $res['QueryParam'] = [];
            if (null !== $this->queryParam && \is_array($this->queryParam)) {
                $n = 0;
                foreach ($this->queryParam as $item) {
                    $res['QueryParam'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TestDataServiceApiRequest
     */
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
                $n                 = 0;
                foreach ($map['BodyParams'] as $item) {
                    $model->bodyParams[$n++] = null !== $item ? bodyParams::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HeadParams'])) {
            if (!empty($map['HeadParams'])) {
                $model->headParams = [];
                $n                 = 0;
                foreach ($map['HeadParams'] as $item) {
                    $model->headParams[$n++] = null !== $item ? headParams::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PathParams'])) {
            if (!empty($map['PathParams'])) {
                $model->pathParams = [];
                $n                 = 0;
                foreach ($map['PathParams'] as $item) {
                    $model->pathParams[$n++] = null !== $item ? pathParams::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['QueryParam'])) {
            if (!empty($map['QueryParam'])) {
                $model->queryParam = [];
                $n                 = 0;
                foreach ($map['QueryParam'] as $item) {
                    $model->queryParam[$n++] = null !== $item ? queryParam::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
