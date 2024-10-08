<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateScheduledPreloadJobRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example oss
     *
     * @var string
     */
    public $insertWay;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ossUrl;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $siteId;

    /**
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
