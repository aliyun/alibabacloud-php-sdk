<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryShortUrlResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $uniqueVisitorCount;

    /**
     * @var string
     */
    public $sourceUrl;

    /**
     * @var string
     */
    public $shortUrlStatus;

    /**
     * @var string
     */
    public $pageViewCount;

    /**
     * @var string
     */
    public $expireDate;

    /**
     * @var string
     */
    public $shortUrlName;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $shortUrl;
    protected $_name = [
        'uniqueVisitorCount' => 'UniqueVisitorCount',
        'sourceUrl'          => 'SourceUrl',
        'shortUrlStatus'     => 'ShortUrlStatus',
        'pageViewCount'      => 'PageViewCount',
        'expireDate'         => 'ExpireDate',
        'shortUrlName'       => 'ShortUrlName',
        'createDate'         => 'CreateDate',
        'shortUrl'           => 'ShortUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uniqueVisitorCount) {
            $res['UniqueVisitorCount'] = $this->uniqueVisitorCount;
        }
        if (null !== $this->sourceUrl) {
            $res['SourceUrl'] = $this->sourceUrl;
        }
        if (null !== $this->shortUrlStatus) {
            $res['ShortUrlStatus'] = $this->shortUrlStatus;
        }
        if (null !== $this->pageViewCount) {
            $res['PageViewCount'] = $this->pageViewCount;
        }
        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }
        if (null !== $this->shortUrlName) {
            $res['ShortUrlName'] = $this->shortUrlName;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->shortUrl) {
            $res['ShortUrl'] = $this->shortUrl;
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
        if (isset($map['UniqueVisitorCount'])) {
            $model->uniqueVisitorCount = $map['UniqueVisitorCount'];
        }
        if (isset($map['SourceUrl'])) {
            $model->sourceUrl = $map['SourceUrl'];
        }
        if (isset($map['ShortUrlStatus'])) {
            $model->shortUrlStatus = $map['ShortUrlStatus'];
        }
        if (isset($map['PageViewCount'])) {
            $model->pageViewCount = $map['PageViewCount'];
        }
        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }
        if (isset($map['ShortUrlName'])) {
            $model->shortUrlName = $map['ShortUrlName'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['ShortUrl'])) {
            $model->shortUrl = $map['ShortUrl'];
        }

        return $model;
    }
}
