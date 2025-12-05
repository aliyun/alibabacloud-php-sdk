<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneResponseBody\scene\relationList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneResponseBody\scene\relationList\apiList\body;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneResponseBody\scene\relationList\apiList\checkPointList;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneResponseBody\scene\relationList\apiList\exportList;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneResponseBody\scene\relationList\apiList\headerList;

class apiList extends Model
{
    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var body
     */
    public $body;

    /**
     * @var checkPointList[]
     */
    public $checkPointList;

    /**
     * @var exportList[]
     */
    public $exportList;

    /**
     * @var headerList[]
     */
    public $headerList;

    /**
     * @var string
     */
    public $method;

    /**
     * @var int
     */
    public $redirectCountLimit;

    /**
     * @var int
     */
    public $timeoutInSecond;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'apiId' => 'ApiId',
        'apiName' => 'ApiName',
        'body' => 'Body',
        'checkPointList' => 'CheckPointList',
        'exportList' => 'ExportList',
        'headerList' => 'HeaderList',
        'method' => 'Method',
        'redirectCountLimit' => 'RedirectCountLimit',
        'timeoutInSecond' => 'TimeoutInSecond',
        'url' => 'Url',
    ];

    public function validate()
    {
        if (null !== $this->body) {
            $this->body->validate();
        }
        if (\is_array($this->checkPointList)) {
            Model::validateArray($this->checkPointList);
        }
        if (\is_array($this->exportList)) {
            Model::validateArray($this->exportList);
        }
        if (\is_array($this->headerList)) {
            Model::validateArray($this->headerList);
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

        if (null !== $this->body) {
            $res['Body'] = null !== $this->body ? $this->body->toArray($noStream) : $this->body;
        }

        if (null !== $this->checkPointList) {
            if (\is_array($this->checkPointList)) {
                $res['CheckPointList'] = [];
                $n1 = 0;
                foreach ($this->checkPointList as $item1) {
                    $res['CheckPointList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->exportList) {
            if (\is_array($this->exportList)) {
                $res['ExportList'] = [];
                $n1 = 0;
                foreach ($this->exportList as $item1) {
                    $res['ExportList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->headerList) {
            if (\is_array($this->headerList)) {
                $res['HeaderList'] = [];
                $n1 = 0;
                foreach ($this->headerList as $item1) {
                    $res['HeaderList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }

        if (null !== $this->redirectCountLimit) {
            $res['RedirectCountLimit'] = $this->redirectCountLimit;
        }

        if (null !== $this->timeoutInSecond) {
            $res['TimeoutInSecond'] = $this->timeoutInSecond;
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
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }

        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }

        if (isset($map['Body'])) {
            $model->body = body::fromMap($map['Body']);
        }

        if (isset($map['CheckPointList'])) {
            if (!empty($map['CheckPointList'])) {
                $model->checkPointList = [];
                $n1 = 0;
                foreach ($map['CheckPointList'] as $item1) {
                    $model->checkPointList[$n1] = checkPointList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ExportList'])) {
            if (!empty($map['ExportList'])) {
                $model->exportList = [];
                $n1 = 0;
                foreach ($map['ExportList'] as $item1) {
                    $model->exportList[$n1] = exportList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HeaderList'])) {
            if (!empty($map['HeaderList'])) {
                $model->headerList = [];
                $n1 = 0;
                foreach ($map['HeaderList'] as $item1) {
                    $model->headerList[$n1] = headerList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }

        if (isset($map['RedirectCountLimit'])) {
            $model->redirectCountLimit = $map['RedirectCountLimit'];
        }

        if (isset($map['TimeoutInSecond'])) {
            $model->timeoutInSecond = $map['TimeoutInSecond'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
