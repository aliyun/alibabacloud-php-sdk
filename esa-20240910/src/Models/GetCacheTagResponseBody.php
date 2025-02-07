<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class GetCacheTagResponseBody extends Model
{
    /**
     * @var string
     */
    public $caseInsensitive;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $siteVersion;
    /**
     * @var string
     */
    public $tagName;
    protected $_name = [
        'caseInsensitive' => 'CaseInsensitive',
        'requestId'       => 'RequestId',
        'siteVersion'     => 'SiteVersion',
        'tagName'         => 'TagName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
