<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RecommendTemplatesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example {\\n\\t\\"persistent\\": {\\n\\t\\t\\"search\\": {\\n\\t\\t\\t\\"max_buckets\\": \\"10000\\"\\n\\t\\t}\\n\\t}\\n}
     *
     * @var string
     */
    public $content;

    /**
     * @description *
     ****
     * @example dynamicSettings
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'content'      => 'content',
        'templateName' => 'templateName',
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
        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['templateName'])) {
            $model->templateName = $map['templateName'];
        }

        return $model;
    }
}
