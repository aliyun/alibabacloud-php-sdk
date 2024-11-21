<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateScheduledPreloadJobRequest extends Model
{
    /**
     * @description The method to submit URLs to be prefetched.
     *
     * Valid values:
     *
     *   **textBox**
     *   **oss**
     *
     * This parameter is required.
     * @example oss
     *
     * @var string
     */
    public $insertWay;

    /**
     * @description The name of the scheduled prefetch task.
     *
     * This parameter is required.
     * @example example
     *
     * @var string
     */
    public $name;

    /**
     * @description The URL of the OSS object that stores the URLs to be prefetched.
     *
     * @example https://xxxobject.oss-cn-reginon.aliyuncs.com/9d91_xxxxxxxxxxx_158bb6e0f97c477791209bb46bd599f7
     *
     * @var string
     */
    public $ossUrl;

    /**
     * @description The website ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation.
     *
     * This parameter is required.
     * @example 190007158391808
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The URLs to be prefetched. This parameter is required if you set InsertWay to textBox.
     *
     * @example http://testurl.com/a.txt
     * http://testurl.com/b.txt
     * @var string
     */
    public $urlList;
    protected $_name = [
        'insertWay' => 'InsertWay',
        'name'      => 'Name',
        'ossUrl'    => 'OssUrl',
        'siteId'    => 'SiteId',
        'urlList'   => 'UrlList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->insertWay) {
            $res['InsertWay'] = $this->insertWay;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ossUrl) {
            $res['OssUrl'] = $this->ossUrl;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->urlList) {
            $res['UrlList'] = $this->urlList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateScheduledPreloadJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InsertWay'])) {
            $model->insertWay = $map['InsertWay'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OssUrl'])) {
            $model->ossUrl = $map['OssUrl'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['UrlList'])) {
            $model->urlList = $map['UrlList'];
        }

        return $model;
    }
}
