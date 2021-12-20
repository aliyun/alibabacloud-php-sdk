<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class PutBucketWebsiteRequest extends Model
{
    /**
     * @var WebsiteConfiguration
     */
    public $websiteConfiguration;
    protected $_name = [
        'websiteConfiguration' => 'WebsiteConfiguration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->websiteConfiguration) {
            $res['WebsiteConfiguration'] = null !== $this->websiteConfiguration ? $this->websiteConfiguration->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutBucketWebsiteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WebsiteConfiguration'])) {
            $model->websiteConfiguration = WebsiteConfiguration::fromMap($map['WebsiteConfiguration']);
        }

        return $model;
    }
}
