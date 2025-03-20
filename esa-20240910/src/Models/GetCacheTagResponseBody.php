<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetCacheTagResponseBody extends Model
{
    /**
     * @description Whether to ignore case. Possible values:
     * - on: Enabled, ignores case.
     * - off: Disabled, does not ignore case.
     *
     * @example on
     *
     * @var string
     */
    public $caseInsensitive;

    /**
     * @description Request ID.
     *
     * @example 156A6B-677B1A-4297B7-9187B7-2B44792
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Version number of the site.
     *
     * @example 1
     *
     * @var int
     */
    public $siteVersion;

    /**
     * @description Custom CacheTag name.
     *
     * @example example
     *
     * @var string
     */
    public $tagName;
    protected $_name = [
        'caseInsensitive' => 'CaseInsensitive',
        'requestId' => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return GetCacheTagResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CaseInsensitive'])) {
            $model->caseInsensitive = $map['CaseInsensitive'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
