<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class UpdateCacheTagRequest extends Model
{
    /**
     * @var string
     */
    public $caseInsensitive;
    /**
     * @var int
     */
    public $siteId;
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
        'siteId'          => 'SiteId',
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
