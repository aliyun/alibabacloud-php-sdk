<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody\sceneSnapShot\relationList;

use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody\sceneSnapShot\relationList\apiList\body;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody\sceneSnapShot\relationList\apiList\checkPointList;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody\sceneSnapShot\relationList\apiList\exportList;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody\sceneSnapShot\relationList\apiList\headerList;
use AlibabaCloud\Tea\Model;

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
        'apiId'              => 'ApiId',
        'apiName'            => 'ApiName',
        'body'               => 'Body',
        'checkPointList'     => 'CheckPointList',
        'exportList'         => 'ExportList',
        'headerList'         => 'HeaderList',
        'method'             => 'Method',
        'redirectCountLimit' => 'RedirectCountLimit',
        'timeoutInSecond'    => 'TimeoutInSecond',
        'url'                => 'Url',
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
        if (null !== $this->body) {
            $res['Body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->checkPointList) {
            $res['CheckPointList'] = [];
            if (null !== $this->checkPointList && \is_array($this->checkPointList)) {
                $n = 0;
                foreach ($this->checkPointList as $item) {
                    $res['CheckPointList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->exportList) {
            $res['ExportList'] = [];
            if (null !== $this->exportList && \is_array($this->exportList)) {
                $n = 0;
                foreach ($this->exportList as $item) {
                    $res['ExportList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->headerList) {
            $res['HeaderList'] = [];
            if (null !== $this->headerList && \is_array($this->headerList)) {
                $n = 0;
                foreach ($this->headerList as $item) {
                    $res['HeaderList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return apiList
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
        if (isset($map['Body'])) {
            $model->body = body::fromMap($map['Body']);
        }
        if (isset($map['CheckPointList'])) {
            if (!empty($map['CheckPointList'])) {
                $model->checkPointList = [];
                $n                     = 0;
                foreach ($map['CheckPointList'] as $item) {
                    $model->checkPointList[$n++] = null !== $item ? checkPointList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ExportList'])) {
            if (!empty($map['ExportList'])) {
                $model->exportList = [];
                $n                 = 0;
                foreach ($map['ExportList'] as $item) {
                    $model->exportList[$n++] = null !== $item ? exportList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HeaderList'])) {
            if (!empty($map['HeaderList'])) {
                $model->headerList = [];
                $n                 = 0;
                foreach ($map['HeaderList'] as $item) {
                    $model->headerList[$n++] = null !== $item ? headerList::fromMap($item) : $item;
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
