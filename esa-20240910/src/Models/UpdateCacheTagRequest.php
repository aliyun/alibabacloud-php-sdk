<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateCacheTagRequest extends Model
{
    /**
     * @description Specifies whether to ignore case sensitivity. Valid values:
     *
     *   on
     *   off
     *
     * @example on
     *
     * @var string
     */
    public $caseInsensitive;

    /**
     * @description The website ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation.
     *
     * This parameter is required.
     *
     * @example 5407498413****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The version number of the website configurations. You can use this parameter to specify a version of your website to apply the feature settings. By default, version 0 is used.
     *
     * @example 1
     *
     * @var int
     */
    public $siteVersion;

    /**
     * @description The name of the custom cache tag.
     *
     * @example example
     *
     * @var string
     */
    public $tagName;
    protected $_name = [
        'caseInsensitive' => 'CaseInsensitive',
        'siteId' => 'SiteId',
        'siteVersion' => 'SiteVersion',
        'tagName' => 'TagName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->caseInsensitive) {
            $res['CaseInsensitive'] = $this->caseInsensitive;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->siteVersion) {
            $res['SiteVersion'] = $this->siteVersion;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCacheTagRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CaseInsensitive'])) {
            $model->caseInsensitive = $map['CaseInsensitive'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }

        return $model;
    }
}
