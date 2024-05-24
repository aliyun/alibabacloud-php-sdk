<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\InfraStackSpec;

use AlibabaCloud\Tea\Model;

class templateSpec extends Model
{
    /**
     * @example "\nresource \"alicloud_fc_service\" \"default\" {\n  name        = \"xiliu-tf-test-srv4\"\n  description = \"xiliu tf  test service \"\n}\n\n\nresource \"alicloud_oss_bucket\" \"default\" {\n  bucket = \"xiliu-test-tf-bucket4\"\n  acl    = \"private\"\n}\n\noutput \"service_name\" {\n  value = alicloud_fc_service.default.name\n}\n\noutput \"oss_bucket\" {\n  value = alicloud_oss_bucket.default.bucket\n}",
     *
     * @var string
     */
    public $content;

    /**
     * @example terrafrom
     *
     * @var string
     */
    public $engine;
    protected $_name = [
        'content' => 'content',
        'engine'  => 'engine',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->engine) {
            $res['engine'] = $this->engine;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templateSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['engine'])) {
            $model->engine = $map['engine'];
        }

        return $model;
    }
}
